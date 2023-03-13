<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YogaManage;
use Illuminate\Support\Facades\DB;

class YogaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $yogadata = YogaManage::all();
        return view('showYoga',['yogadata'=>$yogadata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addYoga');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $yoga = new YogaManage();
        $yoga->yoga_name = $request->input('ytitle');
        $yoga->yoga_tutorial_path = $request->input('ypath');
        $yoga->save();
        return redirect()->back();
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
        $yoga = YogaManage::find($id);
        $data = compact('yoga');
        return view('updateYoga')->with($data);
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
        $yoga = YogaManage::find($id);
        $yoga->yoga_name = $request->input('uytitle');
        $yoga->yoga_tutorial_path = $request->input('uypath');
        $yoga->save();
        return redirect('/yoga');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        YogaManage::where('id',$id)->delete();
        return redirect()->back();
    }
}
