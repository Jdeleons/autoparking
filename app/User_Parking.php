<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Parking extends Model
{
    protected $fillable = ['name_parking','address_parking','places_available', 'total_places', 'user_parking', 'pass_parking', 'location_id', 'data_id'];
}
