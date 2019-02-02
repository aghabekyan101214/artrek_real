<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class SiteAboutController extends Controller
{
    public function index()
    {
        $data['about'] = About::first();
        return view('site.about', compact('data'));
    }
}
