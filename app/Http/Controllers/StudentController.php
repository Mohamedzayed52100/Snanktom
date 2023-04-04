<?php
namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
class StudentController extends Controller
{
     
    public function index(Request $request)
    {
        $data['students'] = User::get();
        return view('home', $data);
    }
 
    public function removeMulti(Request $request)
    {
        $ids = $request->ids;
        User::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['status'=>true,'message'=>"Student successfully removed."]);
         
    }
 
}