<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    // use HasFactory;
    // protected $table="mohamed";
    // protected $primaryKey='zayed_id';
    // protected $time=false;


    protected $table="flights_tables";
    protected $timestamp=false;


    protected $fillable=['title'];



}
