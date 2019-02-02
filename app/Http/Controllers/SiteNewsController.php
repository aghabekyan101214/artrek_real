<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class SiteNewsController extends Controller
{
    public function index($id = false)
    {
      if($id) {
        $data['data'] = News::findOrFail($id);
        $data['latest'] = News::orderBy('created_at', 'desc')->paginate(5);
        return view('site.detail_news', compact('data'));
      }
        $data['news'] = News::all();
        return view('site.news', compact('data'));
    }
}
