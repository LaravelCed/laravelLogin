<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'user_name',
        'user_email',
        'user_pass',
        'user_type'
    ];
    public function getAuthPassword()
    {
        return $this->user_pass;
    }
}
