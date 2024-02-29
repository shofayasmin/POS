<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function userProfile($id, $name){
        return 'User ke-'. $id." Nama : ".$name;
    }

    
    public function userProfile2(){
        return view ('blog.userPage')
            ->with('id', '01')
            ->with('name', 'shofa');
    }
}
