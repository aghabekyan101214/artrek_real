<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;


class partnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Partner::orderByDesc('id')->get();
        return view('admin.partner.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new partner();
        empty($request->image) ? $data->image = 'public/images.png' : $data->image = $request->image;
        $data->header = $request->header;
        $data->url = $request->url;
        if(empty($request->url)){
            $data->url = '#';
        }
        $data->save();
        return redirect('admin/partner');
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
        $data = Partner::find($id);
        return view('admin.partner.edit', compact('data'));
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
        $data = Partner::find($id);
        empty($request->image) ? $data->image = 'public/images.png' : $data->image = $request->image;
        $data->header = $request->header;
        $data->url = $request->url;
        if(empty($request->url)){
            $data->url = '#';
        }
        $data->save();
        return redirect('admin/partner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Partner::find($id)->delete();
        return redirect('admin/partner');
    }
}
