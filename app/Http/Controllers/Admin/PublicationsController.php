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
use App\Category;
use App\Publication;
use App\Type;
use View;
use Validator;
use Response;
use Event;
use Illuminate\Support\Facades\Log;
class PublicationsController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }



    public function getPublications()
    {
        $publications = DB::table('publications')
                    ->join('users' , 'users.id' , '=' , 'publications.idUser')
                    ->join('categories' , 'categories.id' , '=' , 'publications.idCategory')
                    ->join('types' , 'types.id' , '=' , 'publications.idType')
        ->select('publications.id' , 'publications.title', 'publications.status' , DB::raw('types.title AS type'),  DB::raw('CONCAT(users.fname, " ", users.lname) AS full_name')  , DB::raw('categories.title AS c_title'))->orderBy('publications.created_at' , 'desc');


        return Datatables::of($publications)
            ->make(true);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.publications');
    }

 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showModal($id)
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publication = Publication::findOrFail($id);
        return view('admin.publication' , ['publication' => $publication]);
    }





}
