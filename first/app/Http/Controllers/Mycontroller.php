<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    //
    public function test($id){
        echo "hello from controller:test"."<br>";
        echo $id;
    }
    public function test2(){
        echo "hello from controller:test2 "."<br>";        
    }
    public function test3(){
        echo "hello from controller:test3"."<br>";
        
    } 
    
}
