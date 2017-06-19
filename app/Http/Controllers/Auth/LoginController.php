<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use Response;
class LoginController extends Controller
{


    protected $redirectTo = '/index';

   public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout' ,'UserLogout']]);
    }


    public function UserLogout() {

        Auth::guard('web')->logout();
        return redirect('/');

    }


    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {

       $validator =  Validator::make($request->all(), [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);


      if($validator->fails())
      {
        return Response::json(array('errors' => $validator->getMessageBag()->toArray()));

      }elseif (Auth::guard()->attempt(['email' => $request->email, 'password' => $request->password ,'status' => true], $request->remember))
      {
          return Response::json(array('loggedin' => true));
      }
      else
      {
          return Response::json(array('loggedin' => false));
      }

    }

}
