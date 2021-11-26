<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class StockInOut extends Model
{
    protected $table = 'stock_in_outs';
    protected $fillable = [
        // base model
        'id', 'uuid', 'ordering', 'hidden', 'created_by_id',
        // base model ends
        'name', 'date'
    ];

    protected $dates = [
        'date'
    ];

    // $table->dateTime('date')->nullable();
    //         $table->text('remark')->nullable();
    //         $table->boolean('is_custom_price')->nullable();
    //         $table->double('custom_price')->nullable();
}
