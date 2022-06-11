<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    //
    public function test($id){
        echo "hello from controller "."<br>";
        echo $id;
    }
       
    
}
