<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class FlightController extends Controller
{
    public function insert(){
        $flight =Flight::create([
            'title'=>str::random(10),

        ]);
        return $flight->tilte;

    }

    public function getData(){
        $data =Flight::all();
        dd($data);
        }

    public function getById($id){
        $data=Flight::find($id);
        return view('getit' , ['data'=>$data]);

    }
    public function usingwhere(){
        $data=Flight::where('title' , 'mohamed')->first();

        if($data){
            return "founded";

        }
        else
        return "not founded";


    }

    public function testJoin(){
        $data =DB::table('users')->join('phones' , 'users.id' , '=' , 'phones.user_id')->get();
        return dd($data);
        
    }




}
