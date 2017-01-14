<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    //
    protected $table='hotel';
    protected $fillable=['hotel_name', 'hotel_email','hotel_address','hotel_city'];
}
