<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fullcalender extends Model
{
    //
    protected $table='fullcalenders';
    protected $fillable=['Nama_Event','Tanggal','Keterangan'];
}
