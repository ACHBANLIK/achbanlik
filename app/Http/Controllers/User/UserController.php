<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Publication;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
/*    public function __construct()
    {
        $this->middleware(['auth' , 'guest']);
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('user.profile');
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pubs = Publication::paginate(5);
        $cats = Category::all();

        if ($request->ajax()) {
            $view = view('user.data',compact('pubs'))->render();
            return response()->json(['html'=>$view]);
        }

        return view('user.index',compact('pubs' , 'cats'));
    }



}
