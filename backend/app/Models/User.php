<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model
{

    protected $table = 'users';
    protected $fillable = [
        // base model
        'id', 'uuid', 'ordering', 'hidden', 'created_by_id',
        // base model ends
        'name', 
        'username', 
        'password', 
        'kiosk_id', 
        'employee_id',
        'employee_id_str'
    ];
    // $table->text('username')->nullable();
    //         $table->text('password')->nullable();
    //         $table->bigInteger('kiosk_id')->nullable();
    //         $table->bigInteger('employee_id')->nullable();
}
