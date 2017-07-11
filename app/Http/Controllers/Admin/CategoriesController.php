<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\UploadedFile;
use Datatables;
use DB;
use App\category;
use View;
use Validator;
use Response;
use Auth;

class CategoriesController extends Controller
{




protected function validateMe(Request $request   , string $param)
{
 



    switch ($param) {
        case 'store':
                $rules =
                [
                    'title_fr'=> 'required|max:255|unique:categories',
                    'title_en'=> 'required|max:255|unique:categories',
                    'description'=> 'required|max:255|regex:/^[a-z ,.\'-]+$/i',
                    'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ];
            break;
        
        case 'update':
                $rules =
                [
                    'title_fr'=> 'required|max:255|regex:/^[a-z ,.\'-]+$/i',
                    'title_en'=> 'required|max:255|regex:/^[a-z ,.\'-]+$/i',
                    'description' => 'required|max:255|regex:/^[a-z ,.\'-]+$/i', 
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

        return view('admin.categories');
    }





    public function getCategories()
    {
        $categories = DB::table('categories')->select('id' , 'title_fr' , 'title_en', DB::raw("DATE_FORMAT(created_at, '%d-%m-%Y') as created_at")  , 'description', 'photo')->orderBy('id' , 'desc');
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

            $category = new category();
            $category->idAdmin = Auth::user()->id;
            $category->title_fr = $request->title_fr;
            $category->title_en = $request->title_en;            
            $category->description = $request->description;
           // $category->created_at = date('d-m-Y H:i:s');

            if($request->hasFile('photo'))
            {
               $category->photo = $request->file('photo')->store('categories');
            }


            $category->save();
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

        $category = category::findOrFail($id);
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

            $category = category::findOrFail($id);

            $category->title_fr = $request->title_fr;
            $category->title_en = $request->title_en;
            $category->description = $request->description;
            //$category->updated_at = date('d-m-Y H:i:s');


            if($request->hasFile('photo'))
            {

               if($category->photo != "all/category.png")
               {
                    Storage::delete($category->icone);
               }
               $category->icone = $request->file('icone')->store('categories');
            }
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
        $category = category::findOrFail($id);

        if($category->photo != "all/category.png")
        {
            Storage::delete($category->icone);
        }
        $category->delete();
        return response()->json($category);
    }



 


    
}

