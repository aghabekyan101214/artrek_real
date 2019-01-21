<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = News::orderByDesc('id')->get();
        return view('admin.news.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new News();
        empty($request->image) ? $data->image = 'public/images.png' : $data->image = $request->image;
        $data->header = $request->header;
        $data->text = $request->text;
        $data->save();
        return redirect('admin/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = News::find($id);
        return view('admin.news.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = News::find($id);
        empty($request->image) ? $data->image = 'public/images.png' : $data->image = $request->image;
        $data->header = $request->header;
        $data->text = $request->text;
        $data->save();
        return redirect('admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::find($id)->delete();
        return redirect('admin/news');
    }
}
