<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        //Using user model
        $user = User::findOrFail(1);

        return view('home.index', ['user' => $user]);
    }
}
