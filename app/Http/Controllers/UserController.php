<?php

namespace App\Http\Controllers;

use App\Services\userservices;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $user;
    public  userservices $userservices;
    public function __construct(userservices $userservices){
        $this->userservices=$userservices;

    }


    public function index() {
        $data=[
            'name'=>'mohamd brahi zayed' ,
            'email'=>'ahm4ed521@gmail.com' ,
            'password'=>'123456789',

        ];

       $this->userservices->createuser($data);
        return 'Done';
    }
    public function getUsers() {


      return  $this->userservices->getUsers();
        //return 'Done';
    }
    public function getUser($id){
        return $this->userservices->getUser($id);

    }
    public function deleteUser($id){
        return $this->userservices->deleteUser($id);

    }
    public function updateUser(){
        $data=['name'=>'alaa ibrahim'];
        return $this->userservices->updateUser(10 , $data);
    }


    public function text(){
       return  die(get_class($this->userservices));

    }

}
