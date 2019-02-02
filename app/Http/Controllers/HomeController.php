<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data['home'] = Home::all();
        return view('site.home', compact('data'));
    }
}
