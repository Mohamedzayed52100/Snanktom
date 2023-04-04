<?php

namespace App\Http\Controllers;

use App\Jobs\ProductJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;




class ProductController extends Controller
{
    public function insert(){


        ProductJob::dispatch();
        return "data has been inserted in DB";


    }
}
