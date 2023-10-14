<?php

namespace App\Http\Controllers;

use App\Models\commande;
use App\Models\lignecommande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    

    public function deleteLigneCommande(Request $request){
        lignecommande::where("id", "=", $request->id)->delete();
        return redirect()->back()->with('succes', 'ligne de commande supprimer');
    
    }

    public function store (Request $request){
        //verification si ilya un commande de meme client ou non
        $commande = commande::where('client_id', auth::user()->id)->where('etat', 'en cours')->get();

        if(count($commande) == 1){
            $lc = new lignecommande();
            $lc->qte = $request->qte;
            $lc->product_id = $request->id_product;
            $lc->commande_id =Commande::where("client_id", "=", auth()->user()->id)->orderBy("id", "desc")->first()->id;
            
            if($lc->save()){
                return redirect('/client/cart')->with('success','produit commande');
            }

        }
        
        else{
            $commande = new Commande();
            $commande->client_id=Auth::user()->id;

            if( $commande->save() ){
        
                $lc = new lignecommande();
                $lc->qte = $request->qte;
                $lc->product_id = $request->id_product;
                $lc->commande_id = Commande::where("client_id", "=", auth()->user()->id)->orderBy("id", "desc")->first()->id;

                if($lc->save()){
                    return redirect('/client/cart')->with('success','produit commande');  
                }
             
            }
        
            else{
                return redirect()->back()->with('error','impossible de commandes produit');
            }
        }  
 
}



    
}
