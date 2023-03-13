<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MusicManage;
use Illuminate\Support\Facades\DB;

class MusicController extends Controller
{

    /**
     * The HTTP methods that should be used for each resource controller action.
     *
     * @var array
     */
    protected $methods = [
        'index' => ['GET', 'HEAD'],
        'create' => ['GET', 'HEAD'],
        'store' => ['POST'],
        'show' => ['GET', 'HEAD'],
        'edit' => ['GET', 'HEAD'],
        'update' => ['PUT', 'PATCH'],
        'destroy' => ['DELETE'],
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musicdata = MusicManage::all();
        return view('showMusic',['musicdata'=>$musicdata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addMusic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $music = new MusicManage();
        $music->music_title = $request->input('mtitle');
        $music->music_type = $request->input('mtype');
        $music->music_path = $request->input('mpath');
        $music->save();
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
        $music = MusicManage::find($id);
        $data = compact('music');
        return view('updateMusic')->with($data);
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
        $music = MusicManage::find($id);
        $music->music_title = $request['umtitle'];
        $music->music_type = $request['umtype'];
        $music->music_path = $request['umpath'];
        $music->save();
        return redirect('/music');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::table('music_detail')->where('id',$id)->delete();
        MusicManage::where('id',$id)->delete();
        return redirect()->back();
    }
}
