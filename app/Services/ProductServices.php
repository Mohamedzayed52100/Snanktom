<?php
namespace App\Services;

use App\Models\Product;
use App\Models\User;

class ProductSevices{
    public function getProducts(){
        return Product::all();
    }
    public function getProduct($id){
        return  Product::find($id);

    }
    public function createProduct($data){
       return  Product::create($data);
    }
    public function updateProduct($id , $data){
        $product=$this->getProduct($id);
        $product::update($data);
        $product->save();
        return $product;

    }
    public function deleteProduct($id){
        Product::find($id)->delete();

    }


}
