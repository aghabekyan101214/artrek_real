<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function get_banner($id) {
        $data = Type::findOrFail($id);
        return view('site.banner', compact('data'));
    }
}
