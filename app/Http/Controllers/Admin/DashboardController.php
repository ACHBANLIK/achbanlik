<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Opinion;
use App\Comment;
use App\Category;
use App\Publication;
use App\User;
use App\Trophy;
use DB;

class DashboardController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bestUser = User::orderBy('points' , 'desc')->first();
        $users = User::count();
        $publications = Publication::count();
        $opinions = Opinion::count();
        $comments = Comment::count();

        $dashboard =['users' => $users , 'publications' => $publications, 'opinions' => $opinions, 'comments' => $comments];
        return view('admin.index' , ['dashboard' => $dashboard , 'bestUser' => $bestUser]);
    }

    
}
