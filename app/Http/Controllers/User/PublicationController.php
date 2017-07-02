<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Validator;
use Response;
use Auth;   
use App\Category;
use App\Publication;
use App\Comment;
use App\Psignal;
use App\Utrophy;
use DB;
use Datatables;
use Carbon\Carbon;  
class PublicationController extends Controller
{


   protected function validateMe(Request $request   , string $param)
{


    switch ($param) {
        case 'infos':
                $rules =
                [
                    'fname'=> 'required|max:255|regex:/^[a-z ,.\'-]+$/i',
                    'lname' => 'required|max:255', 
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

        case 'type1':
                $rules =
                [
                    'title'=> 'required|max:100',
                    'deadline' => 'required|date',
                    'description' => 'required|max:255', 
                ];
            break;
        
        case 'type2':
                $rules =
                [
                    'title'=> 'required|max:100',
                    'deadline' => 'required|date',
                    'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ];
            break;

        case 'type3':
                $rules =
                [
                    'title'=> 'required|max:100',
                    'deadline' => 'required|date',
                    'description' => 'required|max:255', 
                    'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ];
            break;

        case 'type4':
                $rules =
                [
                    'title'=> 'required|max:100',
                    'deadline' => 'required|date',
                    'description1' => 'required|max:255', 
                    'description2' => 'required|max:255', 
                ];
            break;
        
        case 'type5':
                $rules =
                [
                    'title'=> 'required|max:100',
                    'deadline' => 'required|date',
                    'photo1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'photo2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ];
            break;

        case 'type6':
                $rules =
                [
                    'title'=> 'required|max:100',
                    'deadline' => 'required|date',
                    'description1' => 'required|max:255', 
                    'description2' => 'required|max:255', 
                    'photo1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'photo2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ];
            break;

        }


  return  Validator::make($request->all(), $rules);
}



   public function store(Request $request)
    {
        $method  = $request->type;

        if($method == "type1")
        {

            $validator = $this->validateMe($request , "type1");

            if ($validator->fails()){
                return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
            }
            else
            {
                $publication  = new Publication();
                $publication->idUser  = Auth::user()->id;
                $publication->idType  = 1;
                $publication->idCategory  = $request->category;
                $publication->privacy  = $request->privacy;
                $publication->title = $request->title;
                $publication->text1 = $request->description;
                $publication->willend_at = Carbon::Parse($request->get('deadline'))->toDateTimeString();
                $publication->save();

                if(Auth::user()->publications->count() == 1)
                {
                    Auth::user()->addTrophy(3);
                }

                return response()->json(['success'=>'done' , 'publication' => $publication->id]);

            }

        }

        elseif($method == "type2")
        {

                $validator = $this->validateMe($request , "type2");

                if ($validator->fails()){
                    return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
                }
                else
                {

                $publication  = new Publication();
                $publication->idUser  = Auth::user()->id;
                $publication->idType  = 2;
                $publication->idCategory  = $request->category;
                $publication->privacy  = $request->privacy;
                $publication->title = $request->title;
                $publication->willend_at = Carbon::Parse($request->get('deadline'))->toDateTimeString();

                $publication->image1 = $request->file('photo')->store('publications');


                $publication->save();
                if(Auth::user()->publications->count() == 1)
                {
                    Auth::user()->addTrophy(3);
                }

                return response()->json(['success'=>'done' , 'publication' => $publication->id]);

                }

        }

        elseif($method == "type3")
        {

                $validator = $this->validateMe($request , "type3");

                if ($validator->fails()){
                    return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
                }
                else
                {

                $publication  = new Publication();
                $publication->idUser  = Auth::user()->id;
                $publication->idType  = 3;
                $publication->idCategory  = $request->category;
                $publication->privacy  = $request->privacy;
                $publication->title = $request->title;
                $publication->text1 = $request->description;
                $publication->willend_at = Carbon::Parse($request->get('deadline'))->toDateTimeString();

                $publication->image1 = $request->file('photo')->store('publications');
                $publication->save();

                if(Auth::user()->publications->count() == 1)
                {
                    Auth::user()->addTrophy(3);
                }

                return response()->json(['success'=>'done' , 'publication' => $publication->id]);

                }

        }
        elseif($method == "type4")
        {

            $validator = $this->validateMe($request , "type4");

            if ($validator->fails()){
                return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
            }
            else
            {
                $publication  = new Publication();
                $publication->idUser  = Auth::user()->id;
                $publication->idType  = 4;
                $publication->idCategory  = $request->category;
                $publication->privacy  = $request->privacy;
                $publication->title = $request->title;
                $publication->text1 = $request->description1;
                $publication->text2 = $request->description2;
                $publication->willend_at = Carbon::Parse($request->get('deadline'))->toDateTimeString();

                $publication->save();

                if(Auth::user()->publications->count() == 1)
                {
                    Auth::user()->addTrophy(3);
                }

                return response()->json(['success'=>'done' , 'publication' => $publication->id]);

            }

        }

        elseif($method == "type5")
        {

                $validator = $this->validateMe($request , "type5");

                if ($validator->fails()){
                    return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
                }
                else
                {

                $publication  = new Publication();
                $publication->idUser  = Auth::user()->id;
                $publication->idType  = 5;
                $publication->idCategory  = $request->category;
                $publication->privacy  = $request->privacy;
                $publication->title = $request->title;
                $publication->willend_at = Carbon::Parse($request->get('deadline'))->toDateTimeString();

                $publication->image1 = $request->file('photo1')->store('publications');
                $publication->image2 = $request->file('photo2')->store('publications');

                $publication->save();

                if(Auth::user()->publications->count() == 1)
                {
                    Auth::user()->addTrophy(3);
                }


                return response()->json(['success'=>'done' , 'publication' => $publication->id]);

                }

        }

        elseif($method == "type6")
        {

                $validator = $this->validateMe($request , "type6");

                if ($validator->fails()){
                    return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
                }
                else
                {

                $publication  = new Publication();
                $publication->idUser  = Auth::user()->id;
                $publication->idType  = 6;
                $publication->idCategory  = $request->category;
                $publication->privacy  = $request->privacy;
                $publication->title = $request->title;
                $publication->text1 = $request->description1;
                $publication->text2 = $request->description2;
                $publication->willend_at = Carbon::Parse($request->get('deadline'))->toDateTimeString();

                $publication->image1 = $request->file('photo1')->store('publications');
                $publication->image2 = $request->file('photo2')->store('publications');

                $publication->save();

                if(Auth::user()->publications->count() == 1)
                {
                    Auth::user()->addTrophy(3);
                }
                
                return response()->json(['success'=>'done' , 'publication' => $publication->id]);

                }

        }


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




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request , $id)
    {
        $publication = Publication::where('privacy' , false)->where('status' , 1)->findOrFail($id);
        $comments = Comment::where('idPublication' , $id)->paginate(5);

        if ($request->ajax()) {
            $view = view('user.comments',compact('comments'))->render();
            return response()->json(['html'=>$view]);
        }

        return view('user.publication' , compact('publication' ,'comments'));
    }
      


    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function addcomment(Request $request)
    {

       $validator =  Validator::make($request->all(), [
        'comment'   => 'max:300',
      ]);


      if($validator->fails()) 
      {
        return Response::json(array('errors' => $validator->getMessageBag()->toArray()));

      }else
      {
          $comment= new Comment;
          $comment->idPublication  = $request->id;
          $comment->idUser  =  Auth::user()->id;
          $comment->text  = $request->comment;

          $comment->save();

        if(Auth::user()->comments->count() == 1)
        {
            Auth::user()->addTrophy(2);
        }

          $view = view('user.comments',compact('comment'))->render();

          return Response::json(array('success' => true , 'html'=>$view ));
      }

    }


        /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function signal($id)
    {

          $psignal  = new Psignal();
          $psignal->idPublication  = $id;
          $psignal->idUser  =  Auth::user()->id;
          $psignal->save();

          return Response::json(array('success' => true));
     }


    public function getMyPublications()
    {


        $publications = DB::table('publications')
                    ->join('users' , 'users.id' , '=' , 'publications.idUser')
                    ->join('categories' , 'categories.id' , '=' , 'publications.idCategory')
                    ->join('types' , 'types.id' , '=' , 'publications.idType')
                    ->leftJoin('psignals' , function ($join) {
                         $join->where('psignals.idPublication', '=', 'publications.id');
                    })->select('publications.id' , 'publications.title', 'publications.status'  , 'publications.privacy'  , DB::raw('types.title_'.config('app.locale').' AS type'),  DB::raw('categories.title_'.config('app.locale').' AS c_title') , DB::raw('COUNT(psignals.id) as signals'))->where('publications.idUser' ,'=', Auth::user()->id)->groupBy('publications.id' , 'publications.title' , 'publications.status' ,  'publications.privacy' , 'type'  , 'c_title' )->orderBy('publications.created_at' , 'desc');

                            return Datatables::of($publications)->make(true);

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




   /**
     * Change resource status.
     *
     * @return \Illuminate\Http\Response
     */
    public function changePrivacy() 
    {

        try {

        $id = Input::get('id');
        $publication = Publication::findOrFail($id);
        $publication->privacy = abs($publication->privacy - 1);
        $publication->save();

        } catch (Exception $e) {
            return response()->json('msg');
        }
 
    }


   /**
     * Change resource status.
     *
     * @return \Illuminate\Http\Response
     */
    public function deletePublication($id) 
    {

        try {

        $publication = Publication::findOrFail($id);

        $publication->delete();

        } catch (Exception $e) {
            return response()->json('msg');
        }
 
    }




}
