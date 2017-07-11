<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactUS;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.contact');
    }


    public function addcontactus(Request $request)
    {
       $validator =  Validator::make($request->all(), [
        'title'   => 'max:100|required',
        'message'   => 'max:500',
      ]);


      if($validator->fails()) 
      {
          return Response::json(array('success' => false));

      }else
      {
          $contactus= new ContactUS;
          $contactus->idUser = Auth::user()->id;
          $contactus->title  = $request->title;
          $contactus->message  =  $request->message;
    
          $contactus->save();

   

          return Response::json(array('success' => true));
      }
    }


}