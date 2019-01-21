<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data['types'] = Type::all();
        return view('site.home', compact('data'));
    }
}
