<?php

namespace GiftListNow;

use Illuminate\Database\Eloquent\Model;

class Product_status_list extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description',
    ];
}
