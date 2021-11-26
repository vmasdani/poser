<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $fillable = [
        // base model
        'id', 'uuid', 'ordering', 'hidden', 'created_by_id',
        // base model ends
        'date', 'remark', 'is_custom_price', 'custom_price'
    ];

    // $table->dateTime('date')->nullable();
    //         $table->text('remark')->nullable();
    //         $table->boolean('is_custom_price')->nullable();
    //         $table->double('custom_price')->nullable();
}
