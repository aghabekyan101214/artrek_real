<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function get_banner($id) {
        $data['data'] = Type::findOrFail($id);
        $data['latest'] = Type::where('id', "!=", $id)->get();
        return view('site.banner', compact('data'));
    }
}
