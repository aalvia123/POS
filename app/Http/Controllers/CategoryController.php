<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function baby(){
        return view('category.baby');
    }

    function beauty(){
        return view('category.beauty');
    }

    function category(){
        return view('category.category');
    }

    function food(){
        return view('Category.food');
    }
    
    function homecare(){
        return view('Category.homecare');
    }



}
