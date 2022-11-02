<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index () {
        $name = "Dorcas";
        $age = 10;
        // compact method
        // return view("home", compact("name", "age"));

        // with method
        // return view("home")->with("name", $name);

        // direct method
        return view ("home", [
            "name" => $name,
            "age" => $age
        ]);

    }


}
