<?php

namespace App\Models;

use App\Models\Scopes\CountryScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    public $timestamp=false;
    public $timestamps=false;


//    public  function scopeType($query , $number){
//     return $query->where('status' , $number);

//     }


protected static function booted()
{
    static::addGlobalScope(new CountryScope);
}


}
