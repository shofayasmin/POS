<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodBaverageController extends Controller
{
    public function foodBaverage() {
        return 'Food Baverage Page';
    }

    public function foodBaverage2(){
        return view ('blog.foodBaverage');
    }

}
