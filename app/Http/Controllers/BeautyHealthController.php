<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeautyHealthController extends Controller
{
    public function beautyHealth() {
        return 'Beauty Health Page';
    }

    public function beautyHealth2(){
        return view ('blog.beautyHealth');
    }


}
