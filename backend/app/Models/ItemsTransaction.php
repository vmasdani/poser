<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class ItemsTransaction extends Model
{
    protected $table = 'items_transactions';
    protected $fillable = [
        // base model
        'id', 'uuid', 'ordering', 'hidden', 'created_by_id',
        // base model ends
        'item_id', 'transaction_id', 'qty', 'is_custom_price', 'custom_price'
    ];


    // $table->bigInteger('item_id')->nullable();
    //         $table->bigInteger('transaction_id')->nullable();
    //         $table->double('qty')->nullable();
    //         $table->boolean('is_custom_price')->nullable();
    //         $table->double('custom_price')->nullable();
}
