<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class StockInOutsItems extends Model
{
    protected $table = 'stock_in_outs_items';
    protected $fillable = [
        // base model
        'id', 'uuid', 'ordering', 'hidden', 'created_by_id',
        // base model ends
        'qty', 'item_id', 'in_out_type', 'stock_in_out_id'
    ];

    // $table->double('qty')->nullable();
    //         $table->bigInteger('item_id')->nullable();
    //         $table->text('in_out_type')->nullable(); // I/O
    //         $table->bigInteger('stock_in_out_id')->nullable();
}
