<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function sendRespose($response , $status , $code=200){
        return Response()->json([
            'data'=>$response,
            'status'=>$status,
            'code'=>$code,

        ] , $code); 


    }

}
