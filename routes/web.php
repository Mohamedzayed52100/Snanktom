<?php

use App\Events\UserRegiterationEvent;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DropzoneController;
// use App\Http\Controllers\ProductController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\FindLocationController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StudentController;
// use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use App\Models\Test;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use  App\Http\Requests\PatientLoginReguest;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/view-students', [StudentController::class, 'usersList']);
Route::post('/delete-student/{id}', [StudentController::class, 'removeUser'])->name('alpha-validate.form');



Route::any('row' , function(){

    return User::latest()->get();
    



    //whereX
    return User::whereDay( 'created_at', '1')->get();
    return User::whereMonth( 'created_at', '4')->get();
    return User::whereMonth( 'created_at', '3')->get();
    return User::whereYear( 'created_at', '2023')->get();
    return User::whereCreatedAt('2023-04-01 17:23:48')->get();
    return User::whereCreatedAt('2023-04-01 17:23:48')->get();
    return User::whereId(1)->first();


    return User::where('id' , '>'  , 10 )->get();


    $data= User::take(100)->cursor();
    return var_dump($data);



    $data =User::take(100)->get()->filter(function($el){
        return $el->id >10;

    });
    return ($data);




    // $data=DB::table('tests')->orderByRaw('FIELD(status , 1 , 2 , 3)')->get();
    // return $data;
    //return redirect()->away('https://www.google.com');

    return Test::all();

    return Test::take(10)->get();
    return Test::take(100)->get();//all();



});

Route::view('form'  , 'form');
Route::post('formsubmit' , function(PatientLoginReguest $request){
    $data= $request->validated();

    return $request->all();


});




// Route::get('insertdb' , [ProductController::class , 'insert']);
 Route::get('productSevices' , [ProductController::class , 'index']);
Route::get('UserController' , [UserController::class , 'index']);
Route::get('getUsers' , [UserController::class , 'getUsers']);
Route::get('getUser/{id}' , [UserController::class , 'getUser']);
Route::get('deleteUser/{id}' , [UserController::class , 'deleteUser']);
Route::get('updateUser' , [UserController::class , 'updateUser']);
Route::get('text' , [UserController::class , 'text']);


Route::get('dropzone',[DropzoneController::class,'dorpzone']);
Route::post('add-dropzone',[DropzoneController::class,'dorpzoneSubmit'])->name('add.dropzone');

Route::any('moha' , [TestController::class , 'moha'])->name('moha.index');
Route::any('event' , [EventController::class , 'index'])->name('event.index');
Route::any('indext' , [MailController::class , 'index']);
Route::any('emailSend' , [MailController::class , 'emailSend']);

Route::get('/', function () {
    // $data =DB::table('users')->get();

    // $data =DB::table('users')->where('id' , 1)->first();

    // $data =DB::table('users')->find(3);

    // $data = DB::table('users')->pluck('name');


    // $data=DB::table('users')->count();


    // $data =DB::table('users')->max('id');

    // $data =DB::table('users')->distinct()->count();

   // return dd($data);



    return view('welcome');
});


Route::get('fireevent' , function(){
    return view('fireevent');
});
Route::post('fireevent' , function(Request  $request){
    $name = $request->name;

    event(new UserRegiterationEvent($request->name));
    // return view('fireevent');
});


Route::any('index' , [RoleController::class , 'index'])->name('index');
Route::any('testJoin' , [FlightController::class , 'testJoin'])->name('testJoin');
Route::any('usingwhere' , [FlightController::class , 'usingwhere'])->name('usingwhere');
Route::any('getById/{id}' , [FlightController::class , 'getById'])->name('getById');
Route::any('insert' , [FlightController::class , 'insert'])->name('insert');
Route::any('getData' , [FlightController::class , 'getData'])->name('getData');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';



Route::any('home'  , [HomeController::class , 'index'])->name('home');




Route::middleware('auth')->group(function(){
Route::any('post'  , [PostController::class , 'index'])->name('home');

});


Route::any('zayed' , function(){
    $data =User::find(1);
    return dd($data->phone->number);
});

Route::any('basama' ,function(){
    $data =Phone::find(1);
    return dd($data->user->name);


});



Route::any('oneit' , function(){

    $data =User::find(1);
    return dd($data->posts);

});

Route::any('getit' , function(){

    $data =Post::find(2);
    return dd($data->user->name);

});




Route::any('posts' , function(){

    $data=Category::all();
     foreach($data as $key=>$cat)echo $cat->posts;

   //  return dd($data );
});


Route::any('category' , function(){

    $data=Post::all();
     foreach($data as $key=>$cat)echo $cat->categories;

   //  return dd($data );
});





Route::get('/', [FormController::class, 'index']);
Route::post('/validate-form', [FormController::class, 'alphaForm'])->name('alpha-validate.form');


Route::get('students', [StudentController::class, 'index']);
Route::delete('delete-all', [StudentController::class, 'removeMulti']);

Route::get('find-near-location', [FindLocationController::class, 'index']);

Route::get('/home', [FormController::class, 'index']);
