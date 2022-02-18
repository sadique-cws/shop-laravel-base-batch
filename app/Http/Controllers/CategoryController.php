<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view("category_home",['category'=>Category::all()]);
    }
    public function store(Request $req){

        $req->validate([
            'cat_title' => 'required',
        ]);

        $cat = new Category();
        $cat->cat_title = $req->cat_title;
        $cat->cat_description = $req->cat_description;
        $cat->save();

        return redirect()->route('category.home');
    }
    public function edit($id){
        return view("category_edit",['category'=>Category::find($id)]);
    }

    public function update(Request $req, $id){
        $req->validate([
            'cat_title' => 'required',
        ]);

        $cat = Category::find($id);
        $cat->cat_title = $req->cat_title;
        $cat->cat_description = $req->cat_description;
        $cat->save();

        return redirect()->route('category.home');
    }
    public function delete(Request $req, $id){
        $data = Category::find($id);
        $data->delete();
        return redirect()->route('category.home');
    }

}
