<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clothes;

class HomeController extends Controller
{
    public function index() {
        $data = Clothes::all();
        return view('home', ['data'=>$data]);
    }
}
