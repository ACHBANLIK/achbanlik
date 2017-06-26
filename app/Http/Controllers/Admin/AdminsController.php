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
use App\Admin;
use View;
use Validator;
use Response;
use Event;
use Illuminate\Support\Facades\Log;

class AdminsController extends Controller
{




protected function validateMe(Request $request   , string $param)
{
 



    switch ($param) {
        case 'store':
                $rules =
                [
                    'email'=> 'required|email|max:255|unique:admins',
                    'fname'=> 'required|max:255|regex:/^[a-z ,.\'-]+$/i',
                    'lname' => 'required|max:255|regex:/^[a-z ,.\'-]+$/i', 
                    'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ];
            break;
        
        case 'update':
                $rules =
                [
                    'fname'=> 'required|max:255|regex:/^[a-z ,.\'-]+$/i',
                    'lname' => 'required|max:255|regex:/^[a-z ,.\'-]+$/i', 
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

        return view('admin.admins');
    }


    public function getAdmins()
    {
        $admins = DB::table('admins')->select('id' , 'fname' , 'lname' , 'email' , 'status' , 'photo')->where('role' , '2')->orderBy('created_at' , 'desc');
        return Datatables::of($admins)
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

            $admin = new Admin();
            $admin->fname = $request->fname;
            $admin->lname = $request->lname;
            $admin->email = $request->email;
           

            if($request->hasFile('photo'))
            {

               $admin->photo = $request->file('photo')->store('admins_avatars');
            }

            $admin->save();

            Event::fire(new SendAdminWelcomeMail($admin->id));
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

        $admin = Admin::findOrFail($id);
        return view('admin.admins' , ['admin' => $admin]);
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

            $admin = Admin::findOrFail($id);
            $admin->fname = $request->fname;
            $admin->lname = $request->lname;

            if($request->hasFile('photo'))
            {

               if($admin->photo != "all/admin_avatar.png")
               {
                    Storage::delete($admin->photo);
               }
               $admin->photo = $request->file('photo')->store('admins_avatars');
            }

            $admin->save();


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
        $admin = Admin::findOrFail($id);
        if($admin->photo != "all/admin_avatar.png")
        {
            Storage::delete($admin->photo);
        }
        $admin->delete();
        return response()->json($admin);
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
        $admin = Admin::findOrFail($id);
        $admin->status = abs($admin->status - 1);
        $admin->save();

        } catch (Exception $e) {
            return response()->json('msg');
        }
 
    }


    
}

