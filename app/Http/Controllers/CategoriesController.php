<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function index()
    {
        // $enitiy = DB::table('categories')->get();
        // // dd($enitiy);
        $enitiy=Category::get();
        return view('categories/index', [
            'categories' => $enitiy,
            'title' => 'Hello'
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
            'category'=>$entity
        ]);
    }
}
