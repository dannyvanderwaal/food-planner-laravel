<?php

namespace App\Models;

/**
 * Shop Model
 */
class Shop extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'latitude',
        'longitude',
    ];
}
