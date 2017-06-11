<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\SendUserWelcomeMail;
use App\Http\UploadedFile;
use Datatables;
use DB;
use App\User;
use App\Country;
use App\Publication;
use App\Opinion;
use View;
use Validator;
use Response;
use Event;
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.users');
    }


    public function getUsers()
    {
        $users = DB::table('users')->select('id' , 'fname' , 'lname' , 'points' , 'status')->orderBy('created_at' , 'desc');
        return Datatables::of($users)
            ->make(true);
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {



         $user = User::findOrFail($id);

        } catch (Exception $e) {
            return response()->json('msg');
        }
        return response()->json(array('user' =>$user , 'country' =>$user->country->name ,  'publications' =>$user->publications()->count() ,  'votes' =>$user->opinions()->count()));

    }

    /**opinionscons
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }



    /**
     * Change resource status.
     *
     * @return \Illuminate\Http\Response
     */
    public function changeStatus() 
    {

        try {

        $id = Input::get('id');
        $user = User::findOrFail($id);
        $user->status = abs($user->status - 1);
        $user->save();
        } catch (Exception $e) {
            return response()->json('msg');
        }


        
    }


    
}

