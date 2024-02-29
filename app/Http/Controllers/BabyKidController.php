<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BabyKidController extends Controller
{
    public function babyKid() {
        return 'Baby Kid Page';
    }

    public function babyKid2(){
        return view ('blog.babyKid');
    }


}
