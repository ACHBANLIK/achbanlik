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
use App\PSignal;
use View;
use Validator;
use Response;
use Event;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;


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



    public function getPublications(Request $request)
    {


        $publications = DB::table('publications')
                    ->join('users' , 'users.id' , '=' , 'publications.idUser')
                    ->join('categories' , 'categories.id' , '=' , 'publications.idCategory')
                    ->join('types' , 'types.id' , '=' , 'publications.idType')
                    ->leftJoin('psignals' , function ($join) {
                         $join->where('psignals.idPublication', '=', 'publications.id');
                    })->select('publications.id' , 'publications.title', 'publications.status'  , DB::raw('types.title_'.config('app.locale').' AS type'),  DB::raw('CONCAT(users.fname, " ", users.lname) AS full_name')  , DB::raw('categories.title_'.config('app.locale').' AS c_title') , DB::raw('COUNT(psignals.id) as signals'))->groupBy('publications.id' , 'publications.title' , 'publications.status' , 'type'  , 'full_name'  , 'c_title' )->orderBy('publications.created_at' , 'desc');
        

        return Datatables::of($publications)
         ->filter(function ($query) use ($request) {


            if ($request->has('user')) {
                $query->where('users.fname', 'like', "%{$request->get('user')}%");

                $query->orWhere('users.lname', 'like', "%{$request->get('user')}%");
            }

            
            if ($request->has('type') && $request->get('type') != "-1") {
                $query->where('publications.idType', '=', $request->get('type'));
            }

            if ($request->has('cat') && $request->get('cat') != "-1") {
                $query->where('publications.idCategory', '=', $request->get('cat'));
            }

            if ($request->has('status') && $request->get('status') != "-1") {
                $query->where('publications.status', '=', $request->get('status'));
            }

/*            if ($request->has('signals2') && $request->get('signals2') != "0") {
                $query->where('signals' , array($request->get('signals1')  , $request->get('signals2')));
            }
*/
            if ($request->has('from') && $request->has('to')) {
                $query->whereDate('publications.created_at' , '>=' ,  Carbon::Parse($request->get('from'))->toDateTimeString());
                $query->whereDate('publications.created_at' , '<=' ,  Carbon::Parse($request->get('to'))->addHours(23)->addMinutes(59)->toDateTimeString());
            }


        })->make(true);






    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categories = DB::table('categories')
        ->select('id' , DB::raw('title_'.config('app.locale').' AS title'))->orderBy('created_at' , 'desc')->get();

         $types = DB::table('types')
        ->select('id' , DB::raw('title_'.config('app.locale').' AS title'))->orderBy('created_at' , 'desc')->get();


        return view('admin.publications' , ['categories' => $categories , 'types' => $types]);
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


   /**
     * Change resource status.
     *
     * @return \Illuminate\Http\Response
     */
    public function changeStatus() 
    {

        try {

        $id = Input::get('id');
        $publication = Publication::findOrFail($id);
        $publication->status = abs($publication->status - 1);
        $publication->save();

        } catch (Exception $e) {
            return response()->json('msg');
        }
 
    }


}
