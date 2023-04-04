<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FindLocationController extends Controller
{
    public function index(Request $request) {
 
        $latitude = LATTITUDE_GOES_HERE;
        $longtitude = LONGITUDE_GOES_HERE;
            
        $showResult = DB::table("users")
            ->select("users.id"
                ,DB::raw("55555 * acos(cos(radians(" . $latitude . ")) 
                * cos(radians(users.lat)) 
                * cos(radians(users.lon) - radians(" . $longtitude . ")) 
                + sin(radians(" .$latitude. ")) 
                * sin(radians(users.lat))) AS distance"))
                ->groupBy("users.id")
                ->get();
 
      dd($showResult);
    }
}