<?php

use App\Http\Controllers\Api\RigisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|

*/

Route::get('/zayed' , function(Request $request){
  if ($request->route()->named('zayed')) {
    return "mohamed zayed";
}
else return "ahmed";
})->name('zayed');



Route::any('test' , function(){
    return response()->json(['name' =>'mohamed zayed'  , 'age' =>22]);

});



Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});



Route::controller(RigisterController::class)->group(function(){
    Route::post('register'  ,'register' );
    Route::post('login'  ,'login' );

});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
