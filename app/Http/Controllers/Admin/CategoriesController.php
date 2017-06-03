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
use App\Categories;
use View;
use Validator;
use Response;
use Event;
use Illuminate\Support\Facades\Log;

class CategoriesController extends Controller
{




protected function validateMe(Request $request   , string $param)
{
 



    switch ($param) {
        case 'store':
                $rules =
                [
                    'title'=> 'required|title|max:255|unique:categories',
                    'description'=> 'required|max:255|regex:/^[a-z ,.\'-]+$/i',

                ];
            break;
        
        case 'update':
                $rules =
                [
                    'title'=> 'required|max:255|regex:/^[a-z ,.\'-]+$/i',
                    'description' => 'required|max:255|regex:/^[a-z ,.\'-]+$/i', 

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

        return view('admin.categories');
    }


    public function getCategories()
    {
        $categories = DB::table('categories')->select('id' , 'title' , 'description' )->orderBy('created_at' , 'desc');
        return Datatables::of($categories)
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

            $category = new Categories();
            $category->title = $request->title;
            $category->description = $request->description;
            $category->save();

            //Event::fire(new SendAdminWelcomeMail($category->id));
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

        $category = Categories::findOrFail($id);
        return view('admin.categories' , ['category' => $category]);
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

            $category = Categories::findOrFail($id);
            $category->title = $request->title;
            $category->description = $request->description;

            $category->save();


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
        $category = Categories::findOrFail($id);
        $category->delete();
        return response()->json($category);
    }



 


    
}

