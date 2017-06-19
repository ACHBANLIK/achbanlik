<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

use Auth;
use Response;
use Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }



    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(Request $request)
    {

        $validator =  Validator::make($request->all(), [
            'fname'=> 'required|max:255|regex:/^[a-z ,.\'-]+$/i',
            'lname' => 'required|max:255|regex:/^[a-z ,.\'-]+$/i',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        ]);


      if($validator->fails())
      {
        return Response::json(array('errors' => $validator->getMessageBag()->toArray()));

      }else
      {
        $user = User::create([
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'email' => $request['email'],
            'idCountry' => 149,
            'password' => bcrypt($request['password']),
        ]);

        Auth::login($user);

        return Response::json(array('done' => true));
      }

    }

    
}
