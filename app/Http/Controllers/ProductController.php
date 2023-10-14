<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class ProductController extends Controller
{
    //
    //affichage le liste de categories
    public function index(){
        $Products = product::all();
        $categories = Category::all();
        return view('admin.product.index')->with('product', $Products)->with('categories', $categories);
    } 
//validation de champ


    public function store(request $request)
    {
        $produit = new product();
        $produit->name = $request->name;
        $produit->category_id = $request->categorie;
        $produit->description = $request->description;
        $produit->qte = $request->qte;
        $produit->price = $request->price;


        //upload image in dossier upload
        $filename = time() . $request->file("photo")->getClientOriginalName();
        $path = $request->photo->move("uploads", $filename);

        $produit->photo = $path;

        if ($produit->save()) {
            return redirect()->back();
        } else {
            echo 'error404';
        }
    }
        public function destroy($id){
            $produit = product::find($id);
            if ($produit->delete()){
                return redirect()->back();
            }else{
                echo 'error404';
           }   
            
    } 
    //bouton modifier
    public function update(request $request)
     {
    //     $produit = product::find($request->idproduit);
        
    //       $produit = new product();
    //       $produit->name = $request->name;
    //       $produit->description = $request->description;
    //       $produit->qte = $request->qte;
    //       $produit->price = $request->price;

    //     if ($request->file("photo")) {
    //         $file_path = public_path() . '/uploads/' . $produit->photo;
    //         unlink($file_path);
    //         $newname = uniqid();
    //         $image = $request->file('photo');
    //         $newname .= "." . $image->getClientOriginalExtension();
    //         $destinationPath = 'uploads';
    //         $image->move($destinationPath . $newname);
    //         $produit->photo = $newname;

    //     }

    //      if ($produit->update()) {
    //          return redirect()->back();
    //     } else {
    //         echo 'error404';
    //     }

          //  $filename = time() . $request->file("photo")->getClientOriginalName();
            //$path = $request->photo->move("uploads", $filename);

            //$produit = product::where("id", "=", $request->id)->updat([
               // "name" => $request->name,
               // "description" => $request->description,
               // "qte" => $request->qte,
               // "price" => $request->price,
             //   "photo" => $path
           // ]);

           // if($produit){
           // return redirect()->back();
           // }

           // else{
           // dd("error !");
           // }
     }
}
