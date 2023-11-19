<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'userid_agent',
        'property_name',  
        'description',
        'price',
        'lifestyle',
        'type',
        'location_city',
        'location_subcity',
        'property_lifestyle',
        'bedrooms',
        'bathrooms',
        'areasize',
    ];
}
