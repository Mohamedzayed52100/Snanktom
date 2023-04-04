<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\ProductSevices;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // public $p;

    // public function __construct(ProductSevices $productSevices){
    //     $this->p = $productSevices;


    // }
    public function index(ProductSevices $productSevices) {


     //   return $productSevices;

        //return Product::all();
         $productSevices->getProducts();

    }

}
