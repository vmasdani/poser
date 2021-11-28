<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Item extends Model
{
    protected $table = 'items';
    protected $fillable = [
        // base model
        'id', 'uuid', 'ordering', 'hidden', 'created_by_id',
        // base model ends
        'name', 'description', 'item_group_id', 'unit_of_measurement_id'
    ];

    public function itemPrices()
    {
        return $this->hasMany(ItemPrice::class, 'item_id');
    }
}
