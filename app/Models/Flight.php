<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table = 'flights';
    // protected $primaryKey = 'flight_id';
    protected $fillable = ['name', 'airline', 'departure', 'destination', 'price', 'arrival_time'];
    // public $incrementing = false;
    // protected $keyType = 'string';
    // public $timestamps = false;
    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date';
}
