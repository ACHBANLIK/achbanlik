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
use Validator;
use Response;

use Carbon\Carbon;


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



    public function whichWhere(String $table , String $from , String $to)
    {
        $wheres  = [
            [$table.'.created_at', '>=', $from],
            [$table.'.created_at', '<=', $to]
        ];
        return $wheres;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $wheres = [];
        $from ='';
        $to  = '';
        if($request->has('from') && $request->has('to'))
        {
            $from  = Carbon::parse($request->from)->toDateTimeString();
            $to = Carbon::parse($request->to)->addHours(23)->addminutes(59)->toDateTimeString();
        }else
        {
            $from  = Carbon::parse('01/01/0001 00:00:00')->toDateTimeString();
            $to  = Carbon::parse('10/12/3000 00:00:00')->toDateTimeString();
        }

              $bestUser = User::where($this->whichWhere('users' , $from ,$to))->orderBy('points' , 'desc')->first();

              $users = User::where($this->whichWhere('users' , $from ,$to))->count();

              $publications = Publication::where($this->whichWhere('publications' , $from ,$to))->count();
              $opinions = Opinion::where($this->whichWhere('opinions' , $from ,$to))->count();
              $comments = Comment::where($this->whichWhere('comments' , $from ,$to))->count();

              $dashboard  = ['publications' => $publications ,'users' => $users ,'opinions' => $opinions ,'comments' => $comments];
  


               $pubsCat = DB::table('publications')
                            ->join('categories' , 'categories.id' , '=' , 'publications.idCategory')
                ->select('categories.title_'.config('app.locale'), DB::raw('COUNT(publications.id) as count'))->where($this->whichWhere('publications' , $from ,$to))->groupBy('categories.title_'.config('app.locale'))->get();


               $pubsType = DB::table('publications')
                            ->join('types' , 'types.id' , '=' , 'publications.idType')
                ->select('types.title_'.config('app.locale'), DB::raw('COUNT(publications.id) as count'))->where($this->whichWhere('publications' , $from ,$to))->groupBy('types.title_'.config('app.locale'))->get();


               $pubsStatus = DB::table('publications')
                ->select('status', DB::raw('COUNT(publications.id) as count'))->where($this->whichWhere('publications' , $from ,$to))->groupBy('status')->orderBy('count' , 'desc')->get();

               $pubsTime = DB::table('publications')
                ->select(DB::raw('MONTHNAME(publications.created_at) as month'), DB::raw('COUNT(publications.id) as count'))->where($this->whichWhere('publications' , $from ,$to))->groupBy('month')->orderBy(DB::raw('MONTH(publications.created_at)'), 'asc')->get();


              $usersStatus = DB::table('users')
                ->select('status', DB::raw('COUNT(users.id) as count'))->where($this->whichWhere('users' , $from ,$to))->groupBy('status')->orderBy('count' , 'desc')->get();


                return view('admin.index' , ['dashboard' => $dashboard, 'bestUser' => $bestUser, 'pubsCat' => $pubsCat , 'pubsType' => $pubsType, 'pubsStatus' => $pubsStatus , 'usersStatus' => $usersStatus , 'pubsTime' => $pubsTime , 'from'  => $request->from ,  'to'  => $request->to]);
            }



    
}
