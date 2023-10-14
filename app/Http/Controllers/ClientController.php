<?php

namespace App\Http\Controllers;
use App\Models\review;
use App\Models\Category;
use App\Models\commande;
use App\Models\lignecommande;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    //fonction pour afficher dashboard client 
    public function dashboard (){
        return view('/client.dashboard');
    }
    public function profile(){
        return view('client.profile'); 
    }
    public function updateclient(request $request){
        Auth::user()->name = $request->name;
        Auth::user()->email = $request->email;
        if($request->password){
            Auth::user()->password =Hash::make( $request->password);
        }
        Auth::user()->update();
        return redirect('/client/profile')->with('success','client modifier ...!');
    }
    public function addreview(request $REQUEST){
        $review = new review();
        $review->rate = $REQUEST->rate;
        $review->product_id = $REQUEST->product_id;
        $review->content = $REQUEST->content;
        $review->user_id = Auth::user()->id;
        $review->save();
        return redirect()->back();
    }
    public function cart(){
        $categories = category::all();
        $totale = $this->getTotal();

        $commande = Commande::with('lignecommandes.product')->where('client_id', Auth::user()->id)->where('etat', 'en cours')->get();
        // return $commande;
        return view('guest.cart')->with('categories',$categories)->with('commande',$commande)->with("totale", $totale);
    }

    public function getTotal(){
        $total=0;
        $commandes = lignecommande::get();
        
        foreach( $commandes as $lc){
                $total += $lc->product->price * $lc->qte;
        }
        
        return $total; 
    }
}
