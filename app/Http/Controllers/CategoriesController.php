<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    public function index()
    {
        // $enitiy = DB::table('categories')->get();
        // // dd($enitiy);
        $enitiy=Category::get();

        $flahMessage=session('success',false);
        $flahMessage=session()->get('success',false);
        $flahMessage=Session::get('success',false);
        Session::forget('success');

        return view('categories/index', [
            'categories' => $enitiy,
            'title' => 'Hello',
            // 'flahMessage' =>session('success'),
            'flahMessage' =>$flahMessage,
        ]);
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
        return view('categories.create');
    }
    public function store(Request $request){
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
        return view('categories.edit',compact('category'));
    }
    public function update(Request $request,$id){
        $category=Category::findOrFail($id);
        $category->name=$request->input('name');
        $category->description=$request->input('description');
        $category->slug=Str::slug($category->name);
        $category->save();
        return redirect('/categories')->with('success','Update Category');
    }
    public function destroy($id){
        Category::destroy($id);
        // session()->flash('success','Delete Category');
        Session::flash('success','Delete Category');
        return redirect('/categories');
    }
}
