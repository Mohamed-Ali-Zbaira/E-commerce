<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

use App\Models\Category;
class GuestController extends Controller
{
    //
    public function home(){
        $produits = product::get();
        $categories = Category::get();

        return view('Guest.home', compact("produits", "categories"));
    }
    public function productDetails($id){
        $product = product::find($id);
        $products = Product::where('id','!=',$id)->get();
        $categories = Category::get();
        return view('Guest.Product-details')->with('categories',$categories)->with('product',$product)->with('products',$products);
    }
    public function shop($idCategory){
        $Category = Category::find($idCategory);
        $products = Product::where('Category_id',$idCategory)->get();
        $categories = Category::get();
        return view('guest.shop')->with('categories', $categories)->with('products',$products);
    }
    public function search (request $request){
        $products = product::where('name','LIKE','%'. $request->Keywords .'%')->get();
        $categories = Category::get(); 
        return view('guest.shop')->with('categories', $categories)->with('products',$products);
    }
}
