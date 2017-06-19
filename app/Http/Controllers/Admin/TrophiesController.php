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
use App\trophy;
use View;
use Validator;
use Response;
use Event;
use Illuminate\Support\Facades\Log;

class TrophiesController extends Controller
{




protected function validateMe(Request $request   , string $param)
{
 



    switch ($param) {
        case 'store':
                $rules =
                [
                    'name'=> 'required|max:255|unique:trophies',
                    'description'=> 'required',
                    'points' => 'required|numeric',
                    'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ];
            break;
        
        case 'update':
                $rules =
                [
                    'name'=> 'required|max:255|regex:/^[a-z ,.\'-]+$/i',
                    'description' => 'required', 
                    'points' => 'required|numeric',
                    'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ];
            break;
    }



  return  Validator::make($request->all(), $rules);
}



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

        return view('admin.trophies');
    }


    public function getTrophies()
    {
        $trophies = DB::table('trophies')->select('id' , 'name' , 'description' , 'points'  , 'photo')->orderBy('created_at' , 'desc');
        return Datatables::of($trophies)
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


        $validator = $this->validateMe($request , "store");
        if ($validator->fails()){
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        else
        {

            $trophy = new trophy();
            $trophy->name = $request->name;
            $trophy->description = $request->description;
            $trophy->points = $request->points;

            if($request->hasFile('photo'))
            {

               $trophy->photo = $request->file('photo')->store('admins_avatars');
            }

            $trophy->save();

            //Event::fire(new SendAdminWelcomeMail($trophy->id));
            return response()->json(['success'=>'done']);

             
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $trophy = trophy::findOrFail($id);
        return view('admin.trophies' , ['trophy' => $trophy]);
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

        $validator = $this->validateMe($request , "update");

        if ($validator->fails()){
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        else
        {

            $trophy = trophy::findOrFail($id);
            $trophy->name = $request->name;
            $trophy->description = $request->description;
            $trophy->points = $request->points;


            if($request->hasFile('photo'))
            {

               if($trophy->photo != "all/trophy.png")
               {
                    Storage::delete($trophy->photo);
               }
               $trophy->photo = $request->file('photo')->store('trophies');
            }

            $trophy->save();


            return response()->json(['success'=>'done']);

            // Event::fire(new SendAdminWelcomeMail($admin->id));
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trophy = trophy::findOrFail($id);
        if($trophy->photo != "all/trophy.png")
        {
            Storage::delete($trophy->photo);
        }
        $trophy->delete();
        return response()->json($trophy);
    }



 


    
}

