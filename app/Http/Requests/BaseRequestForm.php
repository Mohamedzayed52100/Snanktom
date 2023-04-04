<?php

namespace App\Http\Requests;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;

abstract class BaseRequestForm
{
    protected $_request;
    private $status =true;
    private $errors=[];
    abstract public function rules() :array ;
    public function __construct(Request $request , $forceDie =true ){

        if(!is_null($request)){
            $this->_request = $request;
            $rules=$this->rules();
            // $validator = Validator::make($request->all(), $rules

            // );


        }



    }










}
