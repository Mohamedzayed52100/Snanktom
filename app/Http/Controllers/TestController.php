<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Services\userservices;
class TestController extends Controller
{

    // private $newobj= new userservices();
    public function index(userservices $userservices) {
        $data=[
            'name'=>'mohamed ibrahim zayed' ,
            'email'=>'mohamed@gmail.com' ,
            'password'=>'123456789',

        ];

        $userservices->createuser($data);
        return 'Done';
    }

    public  function tes(){
        return view('test');

    }
    public function test2(Request $request){






        $name =$request->input('name' , 'mohamed');


        if($request->has('name'))
        return  "Yes has name";
        else "no not has name";


        $data= $request->only(['id']);
        return dd($data);
        return $request->all();
    }


    public function moha(){
        $chartjs = app()->chartjs
        ->name('pieChartTest')
        ->type('pie')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['Label x', 'Label y'])
        ->datasets([
            [
                'backgroundColor' => ['#FF6384', '#36A2EB'],
                'hoverBackgroundColor' => ['#FF6384', '#36A2EB'],
                'data' => [15, 59]
            ]
        ])
        ->options([]);

return view('example2', compact('chartjs'));
    }

}
