<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCareController extends Controller
{
    public function homeCare() {
        return 'Home Care Page';
    }

    public function homeCare2(){
        return view ('blog.homeCare');
    }

}
