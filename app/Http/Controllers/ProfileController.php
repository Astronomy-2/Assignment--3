<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){

        $name= "Donal Trump";
        $age="75";

        $data=[
            "id"=>$id,
            "name"=> $name,
            "age"=> $age,

        ];

        $CookieName="access_token";
        $value="123_XYZ";
        $minutes="1";
        $path="/";
        $domain=$_SERVER['SERVER_NAME'];
        $secure=false;
        $httpOnly=true;

        $cookie=cookie($CookieName,$value,$minutes,$path,$domain,$secure,$httpOnly);

        return response()->json($data, 200)->withCookie($cookie);


    }

    }