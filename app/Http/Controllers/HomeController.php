<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // 
    public function index(){

        $cars = Car::where('published_at', "!=", null)->get();

        return view("home.index");
    }
}
