<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index(){
        $data = ['products' => Product::all()];
        return view("productPage.home",$data);
    }
    public function store(Request $req){

        $req->validate([
            'title' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'image' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);

        $pro = new Product();
        $pro->title = $req->title;
        $pro->brand = $req->brand;
        $pro->price = $req->price;
        $pro->discount_price = $req->discount_price;
        $pro->description = $req->description;
        
        // image work
        $file  = $req->image;
        $fileName = $file->getClientOriginalName();
        $file->move("product_image", $fileName);
        $pro->image = $fileName;

        
        $pro->qty = $req->qty;
        $pro->category_id = $req->category_id;
        $pro->save();
        return redirect()->route('product.home');
    }
    public function insert(){
        $data = [
            'category' => Category::all(),
        ];
        return view("productPage.insert",$data);
    }
    public function edit(Request $req, $id){

    }
    public function update(){

    }
    public function destroy($id){
        $pro = Product::find($id);
        $pro->delete();
        return redirect()->route('product.home');
    }
}
