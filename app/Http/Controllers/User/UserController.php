<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Category;
use App\Publication;
use App\User;
use App\Friend;
use Auth;
use Response;
use Validator;
use Storage;
use Carbon\Carbon;

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






protected function validateMe(Request $request   , string $param)
{


    switch ($param) {
        case 'infos':
                $rules =
                [
                    'fname'=> 'required|max:255|regex:/^[a-z ,.\'-]+$/i',
                    'lname' => 'required|max:255|regex:/^[a-z ,.\'-]+$/i', 
                    'birthday' => 'nullable|date',
                ];
            break;
        
        case 'pass':
                $rules =
                [
                    'new_password' => 'required|min:6',
                    'confirm_new_password' => 'required|min:6|same:new_password',
                ];
            break;

        case 'avatar':
                $rules =
                [
                    'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ];
            break;

        }


  return  Validator::make($request->all(), $rules);
}




    public function update(Request $request , $method)
    {
        if($method == "infos")
        {

            $validator = $this->validateMe($request , "infos");

            if ($validator->fails()){
                return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
            }
            else
            {

                $user = User::findOrFail(Auth::user()->id);
                $user->fname = $request->fname;
                $user->lname = $request->lname;
                $user->birthday = Carbon::Parse($request->get('birthday'))->toDateTimeString();
                $user->idCountry = $request->country;

                $user->save();

                return response()->json(['success'=>'done']);

            }

        }
        elseif($method == "pass")
        {

                $validator = $this->validateMe($request , "pass");

                if ($validator->fails()){
                    return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
                }
                else
                {

                    $user = User::findOrFail(Auth::user()->id);
                    $user->password = $request->new_password;
                    $user->save();

                    return response()->json(['success'=>'done']);

                }

        }
        else
        {

                $validator = $this->validateMe($request , "avatar");

                if ($validator->fails()){
                    return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
                }
                else
                {

                    $user = User::findOrFail(Auth::user()->id);


                    if($user->photo != "all/user_avatar.png")
                    {
                        Storage::delete($user->photo);
                    }
                    $user->photo = $request->file('photo')->store('users_avatars');

                    $user->save();

                    return response()->json(['success'=>'done' , 'pic'=>$user->photo]);

                }

        }


    }



    public function profile()
    {
        $user = User::FindOrFail(Auth::user()->id);

        $friends = Friend::where('idUser1' , Auth::user()->id)->where('status'  , 1)->orWhere('idUser2' , Auth::user()->id)->where('status'  , 1)->count();

        return view('user.profile' ,  ['user' => $user , 'friends' => $friends]);
    }


    public function myfriends()
    {
        $user = User::FindOrFail(Auth::user()->id);

        $friends = Friend::where('idUser1' , Auth::user()->id)->where('status'  , 1)->orWhere('idUser2' , Auth::user()->id)->where('status'  , 1)->get();

        $sent = Friend::where('idUser1' , Auth::user()->id)->where('status'  , 0)->get();

        $recieved = Friend::where('idUser2' , Auth::user()->id)->where('status'  , 0)->get();

        return view('user.mesamis' ,  ['user' => $user , 'friends' => $friends , 'sent' => $sent , 'recieved' => $recieved]);
    }




    public function user($id)
    {
        $user = User::FindOrFail($id);

        $friends = Friend::where('idUser1' , $id)->where('status'  , 1)->orWhere('idUser2' , $id)->where('status'  , 1)->count();

        return view('user.profile' ,  ['user' => $user , 'friends' => $friends]);
    }







        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function demo(Request $request)
    {
        return view('user.demo');
    }




        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            $pubs = Publication::where('privacy' , false)->where('status' , true)->orderBy('created_at' , 'Desc')->paginate(5);

            if ($request->ajax()) {
                $view = view('user.publications',compact('pubs'))->render();
                return response()->json(['html'=>$view]);
            }
            return view('user.index',compact('pubs'));

    }






            /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function friends(Request $request)
    {

        $friends = Friend::where('idUser1' , auth::user()->id)->orWhere('idUser2' , Auth::user()->id)->orderBy('created_at' , 'desc')->get();
        $list = collect([]);

        foreach ($friends as $friend) {

            if($friend->idUser1 == Auth::user()->id)   
                $list->push($friend->idUser2);
            else
                $list->push($friend->idUser1);
        }

        $pubs = Publication::whereIn('idUser' , $list)->paginate(5);

        if ($request->ajax()) {
            $view = view('user.publications',compact('pubs'))->render();
            return response()->json(['html'=>$view]);
        }

        return view('user.friends', ["pubs"=>$pubs]);
    }




        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function category(Request $request , $id)
    {
        $pubs = Publication::where('idCategory' , $id)->where('privacy' , false)->where('status' , true)->orderBy('created_at' , 'desc')->paginate(5);
        $cat = Category::FindOrFail($id);

        $category  = $cat->{'title_'.config('app.locale')};
        if ($request->ajax()) {
            $view = view('user.publications',compact('pubs'))->render();
            return response()->json(['html'=>$view]);
        }

        return view('user.index',compact('pubs'  , 'category'));
    }
    


    public function userpublications(Request $request , $id)
    {
            $user = User::FindOrFail($id);

            if($user->isMyFriend())
            {
                $pubs = Publication::where('idUser' , $id)->orderBy('created_at' , 'Desc')->paginate(5);
                if ($request->ajax()) {
                    $view = view('user.publications',compact('pubs'))->render();
                    return response()->json(['html'=>$view]);
                }
                return view('user.friendpubs',compact('pubs' , 'user'));
            }
            else 
            {
                $pubs = Publication::where('status' , false)->where('idUser' , $id)->orderBy('created_at' , 'Desc')->paginate(5);
                if ($request->ajax()) {
                    $view = view('user.publications',compact('pubs'))->render();
                    return response()->json(['html'=>$view]);
                }
                return view('user.friendpubs',compact('pubs' , 'user'));
            }
    }




}
