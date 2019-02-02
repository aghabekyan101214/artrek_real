<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class SiteNewsController extends Controller
{
    public function index($id = false)
    {
      if($id) {
        $data['news'] = News::findOrFail($id);
        return view('site.detail_news', compact('data'));
      }
        $data['news'] = News::all();
        return view('site.news', compact('data'));
    }
}