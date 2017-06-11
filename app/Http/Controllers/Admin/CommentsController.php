<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\SendAdminWelcomeMail;
use App\Http\UploadedFile;
use Datatables;
use DB;
use App\Comment;
use App\Picture;
use View;
use Validator;
use Response;
use Event;
use Illuminate\Support\Facades\Log;

class CommentsController extends Controller
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

        return view('admin.comments');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function getComments($id)
    {
        $comments = DB::table('comments')
                    ->join('users' , 'users.id' , '=' , 'comments.idUser')
                     ->select('comments.id' , 'comments.text', 'comments.image' ,'comments.status',  DB::raw('CONCAT(users.fname, " ", users.lname) AS full_name'))->where('comments.idPublication' , '=' , $id)->orderBy('comments.created_at' , 'desc');


        return Datatables::of($comments)
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

        $comment = Comments::findOrFail($id);
        return view('admin.comments' , ['comment' => $comment]);
    }

    /**
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
        $comment = Comment::findOrFail($id);
        if($comment->image != "")
        {
            Storage::delete($comment->image);
        }
        $comment->delete();
        return response()->json($comment);
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
        $comment = Comment::findOrFail($id);
        $comment->status = abs($comment->status - 1);
        $comment->save();

        } catch (Exception $e) {
            return response()->json('msg');
        }


        
    }


    
}

