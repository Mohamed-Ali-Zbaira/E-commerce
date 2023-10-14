<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class CategoryController extends Controller
{
    //affichage le liste de categories
    public function index(){
        $categories = category::all();
        return view('admin.categories.index')->with('categories',$categories);
    } 
//validation de champ
    public function store(request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $Category =New Category();
        $Category->name = $request->name;
        $Category->description = $request->description;

        if($Category->save()){
        return redirect()->back();
       }else{
            echo 'error404';
       }
    }
     public function destroy($id){
        $Categories = Category::find($id);
        if ($Categories->delete()){
            return redirect()->back();
        }else{
            echo 'error404';
       }   
        }
        public function update(request $request){
            $request->validate([
                'name' => 'required',
                'description' => 'required'
            ]);
        $id = $request->id_category;
        $categorie = Category::find($id);
        $categorie->name = $request->name;
        $categorie->description = $request->description;
        if($categorie->update()){
            return redirect()->back();
           }else{
                echo 'error404';
           }

        }
        public function affichage_commandes(){
            return view('admin.commandes.index');
        }
        public function  affichage_user(){
            return view('admin.user.index');
        }
    }
