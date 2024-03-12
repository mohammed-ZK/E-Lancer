<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Rules\FilterRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{

    protected $roles=[
        'name'=>'required|string|between:2,255',
        'description'=>['nullable','string'],
        'perant_id'=>['int','nullable','exists:categories,id'],
        'art_file'=>['nullable','image'] 
    ];

    protected $messages=[
        'required'=>"the :attribute is required",
        'perant_id.int'=>"The fild should be integer"
    ];

    public function index()
    {
        // $enitiy = DB::table('categories')->get();
        // // dd($enitiy);
        $enitiy=Category::get();

        // $flahMessage=session('success',false);
        // $flahMessage=session()->get('success',false);
        // $flahMessage=Session::get('success',false);
        // Session::forget('success');

        return view('categories.index', [
            'categories' => $enitiy,
            'title' => 'Hello',
            // 'flahMessage' =>session('success'),
            // 'flahMessage' =>$flahMessage,
        ]);
        // return view('layouts.dashboard');
    }
    public function show($id){
        // $entity=DB::table('categories')->where('id','=',$id)->first();
        // $entity=Category::where('id','=',$id)->firstOrFail();
        $entity=Category::findOrFail($id);
        // if($entity==null){
        //     abort(404);
        // }
        return view('categories.show',[
            'category'=>$entity,
        ]);
    }
    public function create(){
        $perants=Category::all();
        $category=new Category;
        return view('categories.create',compact('category','perants'));
    }
    public function store(Request $request){

        

        $clean=$request->validate($this->roles,$this->messages);
        // $clean=$this->validate($request,$roles);

        // $validator=Validator::make($request->all(),$roles);
        // // $clean=$validator->validate();

        // if($validator->fails()){
        //     dd($validator->errors());
        // }

        // dd(
        //     $request->name,
        //     $request->input('name'),
        //     $request->post('name'),//from body=> get from post data
        //     $request->get('name'),
        //     $request['name'],
        //     $request->query('name')//from url =>get from query data
        // );
        $category=new Category;
        $category->name=$request->input('name');
        $category->description=$request->input('description');
        $category->slug=Str::slug($category->name);
        $category->save();
        return redirect('/categories')->with('success','New Category');
    }
    public function edit($id){
        $category=Category::findOrFail($id);
        $perants=Category::all();
        return view('categories.edit',compact('category','perants'));
    }
    public function update(Request $request,$id){
        $clean=$request->validate($this->roles,$this->messages);
        $category=Category::findOrFail($id);
        $category->name=$request->input('name');
        $category->description=$request->input('description');
        $category->slug=Str::slug($category->name);
        $category->save();
        return redirect('/categories')->with('warning','Update Category');
    }
    public function destroy($id){
        Category::destroy($id);
        // session()->flash('success','Delete Category');
        Session::flash('error','Delete Category');
        return redirect('/categories');
    }
    protected function rules(){
        $rules=$this->roles;
        $rules['name'][]=new FilterRule();
        // function($attribute,$value,$fail){
        //     if($value=='god'){
        //         $fail('oh no');
        //     }
        // };
        return $rules;
    } 
}
