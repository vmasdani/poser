<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class ItemPrice extends Model
{
    protected $table = 'item_prices';
    protected $fillable = [
        // base model
        'id', 'uuid', 'ordering', 'hidden', 'created_by_id',
        // base model ends
        'item_id', 'price', 'date'
    ];

    protected $dates = [
        'date'
    ];

    // $table->bigInteger('item_id')->nullable();
    // $table->double('price')->nullable();
    // $table->dateTime('date')->nullable();
}
