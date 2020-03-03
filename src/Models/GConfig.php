<?php

namespace App\Models;

use App\Services\DefaultConfig;

class GConfig extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'default';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'gconfig';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'key';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    public function recover($user)
    {
        $this->oldvalue       = $this->value;
        $this->value          = DefaultConfig::default_value($this->key)['value'];
        $this->operator_id    = $user->id;
        $this->operator_name  = ('[恢复默认] - ' . $user->user_name);
        $this->operator_email = $user->email;
        $this->last_update    = time();
        $this->save();
    }

    public function get()
    {
        switch ($this->type) {
            case 'bool':
                return (bool) $this->value;
            case 'array':
                return json_decode($this->value, true);
            case 'string':
                return (string) $this->value;
            default:
                return (string) $this->value;
        }
    }

    public function set($value, $user = null)
    {
        $this->oldvalue = $this->value;
        $this->value    = $this->typeConversion($value);
        if ($user === null) {
            $this->operator_id    = 0;
            $this->operator_name  = '系统修改';
            $this->operator_email = 'admin@admin.com';
        } else {
            $this->operator_id    = $user->id;
            $this->operator_name  = $user->user_name;
            $this->operator_email = $user->email;
        }
        $this->last_update = time();
        if (!$this->save()) {
            return false;
        }
        return true;
    }

    public function typeConversion($value)
    {
        switch ($this->type) {
            case 'bool':
                return (string) $value;
            case 'array':
                return json_encode($value, 320);
            case 'string':
                return (string) $value;
            default:
                return (string) $value;
        }
    }
}
