<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserManage;

class UserController extends Controller
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
        $userData = UserManage::all();
        return view('showUser',['userdata'=>$userData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $user = new UserManage();
        $user->user_name = $req->input('username');
        $user->user_dob = $req->input('userdob');
        $user->user_contact = $req->input('usercontact');
        $user->user_email = $req->input('useremail');
        $user->user_hobbies = $req->input('userhobbies');
        $user->save();
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
        $user = UserManage::find($id);
        $data = compact('user');
        return view('updateUser')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $user = UserManage::find($id);
        $user->user_name = $req->input('uusername');
        $user->user_dob = $req->input('uuserdob');
        $user->user_contact = $req->input('uusercontact');
        $user->user_email = $req->input('uuseremail');
        $user->user_hobbies = $req->input('uuserhobbies');
        $user->save();
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserManage::where('id',$id)->delete();
        return redirect()->back();
    }
}
