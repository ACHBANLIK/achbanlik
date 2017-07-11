<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Publication;
use App\Friend;
use Response;
use App\Utrophy;


class FriendController extends Controller
{


    public function addfriend($calling , $source , $id)
    {
        $friend = new Friend();
        $friend->idUser1 = Auth::user()->id;
        $friend->idUser2 = $id;
        $friend->status = 0;
        $friend->idUserAction = Auth::user()->id;
        $friend->save();

        $friends = Friend::where('idUser1' , $id)->orWhere('idUser2' , $id)->where('status' , 1)->count();
        $view = view('user.friend',['id' => $id , 'friends' => $friends , 'source' => $calling])->render();
        
        return Response::json(array('success' => true , 'friends' => $friends , 'html' => $view));
        
    }
 


     public function deletefriend($calling , $source , $id)
        {
            $friend = Friend::where('idUser1' , Auth::user()->id)->where('idUser2' , $id)->where('status' , 1)
                      ->orWhere('idUser2' , Auth::user()->id)->where('idUser1' , $id)->where('status' , 1)->first();

            if($friend)
                $friend->delete();

        $friends = Friend::where('idUser1' , $id)->orWhere('idUser2' , $id)->where('status' , 1)->count();


        if($source == "one")
        {
            $view = view('user.friend',['id' => $id , 'friends' => $friends , 'source' => $calling])->render();
            return Response::json(array('success' => true , 'friends' => $friends , 'html' => $view));
        }else
        {            
            return Response::json(array('success' => true));
        }



        
    }

     public function acceptfriend($calling , $source , $id)
        {
            $friend = Friend::where('idUser2' , Auth::user()->id)->where('idUser1' , $id)->where('status' , 0)->first();

            if($friend)
            {
                $friend->idUserAction = Auth::user()->id;
                $friend->status = 1;
                $friend->save();            
            }
               
        $friends = Friend::where('idUser1' , $id)->orWhere('idUser2' , $id)->where('status' , 1)->count();

        $user = User::FindOrFail($id);

        if($source == "one")
        {
            $view = view('user.friend',['id' => $id , 'friends' => $friends , 'source' => $calling])->render();
            return Response::json(array('success' => true , 'friends' => $friends , 'html' => $view));
        }
        else
        {
            $view = view('user.justfriend',['user' => $user])->render();
            return Response::json(array('success' => true , 'html' => $view));
        }
    }
    


     public function cancelfriend($calling , $source , $id)
        {
            $friend = Friend::where('idUser1' , Auth::user()->id)->where('idUser2' , $id)->where('status' , 0)->first();

            if($friend)
                $friend->delete();

        $friends = Friend::where('idUser1' , $id)->orWhere('idUser2' , $id)->where('status' , 1)->count();

        if($source == "one")
        {
            $view = view('user.friend',['id' => $id , 'friends' => $friends , 'source' => $calling])->render();
            return Response::json(array('success' => true , 'friends' => $friends , 'html' => $view));
        }else
        {
            return Response::json(array('success' => true));
        }
    }
 

      public function declinefriend($calling , $source , $id)
        {
            $friend = Friend::where('idUser2' , Auth::user()->id)->where('idUser1' , $id)->where('status' , 0)->first();

            if($friend)
                $friend->delete();

        $friends = Friend::where('idUser1' , $id)->orWhere('idUser2' , $id)->where('status' , 1)->count();

        if($source == "one")
        {
            $view = view('user.friend',['id' => $id , 'friends' => $friends , 'source' => $calling])->render();
            return Response::json(array('success' => true , 'friends' => $friends , 'html' => $view));
        }
        else
        {
            return Response::json(array('success' => true));
        }
    }




        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function publications(Request $request , $id)
    {
            $user = User::FindOrFail($id);


            if($user->isMyFriend())
            {
                $pubs = Publication::where('status' , true)->where('idUser' , $id)->orderBy('created_at' , 'Desc')->paginate(5);
                if ($request->ajax()) {
                    $view = view('user.publications',compact('pubs'))->render();
                    return response()->json(['html'=>$view]);
                }
                return view('user.friendpubs',compact('pubs' , 'user'));
            }
            else 
            {
                    return response()
                        ->view('user.404');
            }


    }



}
