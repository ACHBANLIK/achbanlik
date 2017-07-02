<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Opinion;
use App\Publication;
use Response;
class OpinionController extends Controller
{




     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function upvote($source , $id)
    {

        $opinion = Opinion::where('idUser', '=', Auth::user()->id)
            ->where('idPublication', '=', $id)
            ->first();

        if($opinion)
            $opinion->delete();
        

        $opinion  = new Opinion();
        $opinion->idPublication  = $id;
        $opinion->idUser  = Auth::user()->id;
        $opinion->choice  = 1;
        $opinion->save();

        if(Auth::user()->opinions->count() == 1)
        {
            Auth::user()->addTrophy(5);
        }

        if($source == "one")
        {
            $publication = Publication::where('id' , $id)->first();
            $view = view('user.publications',compact('publication'))->render();
        }else
        {
            $pub = Publication::where('id' , $id)->first();
            $view = view('user.publications',compact('pub'))->render();
        }

        return Response::json(array('success' => true , 'html'=>$view ));
        //return Response::json(array('success' => true));
    }


     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function downvote($source , $id)
    {

        $opinion = Opinion::where('idUser', '=', Auth::user()->id)
            ->where('idPublication', '=', $id)
            ->first();

        if($opinion)
            $opinion->delete();


        $opinion  = new Opinion();
        $opinion->idPublication  = $id;
        $opinion->idUser  = Auth::user()->id;
        $opinion->choice  = 2;
        $opinion->save();

        if(Auth::user()->opinions->count() == 1)
        {
            Auth::user()->addTrophy(5);
        }
        
        if($source == "one")
        {
            $publication = Publication::where('id' , $id)->first();
            $view = view('user.publications',compact('publication'))->render();
        }else
        {
            $pub = Publication::where('id' , $id)->first();
            $view = view('user.publications',compact('pub'))->render();
        }


        return Response::json(array('success' => true , 'html'=>$view ));
        //return Response::json(array('success' => true));
    }


        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function deletevotes($source , $id)
    {
        $opinion = Opinion::where('idUser', '=', Auth::user()->id)
            ->where('idPublication', '=', $id)
            ->first();

        if($opinion)
            $opinion->delete();

        if($source == "one")
        {
            $publication = Publication::where('id' , $id)->first();
            $view = view('user.publications',compact('publication'))->render();
        }else
        {
            $pub = Publication::where('id' , $id)->first();
            $view = view('user.publications',compact('pub'))->render();
        }

        return Response::json(array('success' => true , 'html'=>$view ));
        }



        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function unvote(Request $request)
    {
    	
    }


}
