<?php

namespace App\Services;

use App\Models\Product;
use App\Models\User;

class userservices {

    public function createuser($data){
        return User::create($data);


    }
    public function getUser($id){

        return User::find($id);
    }

    public function getProduct($id){

        return Product::find($id);
    }
    public function getUsers(){


        return User::all();
    }
    public function deleteUser($id){
        $user =$this->getProduct($id);
        if($user)$user->delete();
        else return  redirect('/');

    }
    public function updateUser($id , $data){
        $product=Product::find($id);

        

        $product->name=$data['name'];
        $product->save();
        return $product;




    }


}
