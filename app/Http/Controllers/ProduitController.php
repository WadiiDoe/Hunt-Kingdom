<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produit;
use App\Models\Category;


class ProduitController extends Controller
{
     public function index()
    {
        $produits=produit::orderBy("name")->get();

        return view("produits.index",compact("produits"));

    }

   
    public  function  create(){
        
        $categories = Category::all();   
        return view("produits.createProduit", compact(
            'categories'));
    }

    public function  store(Request $request){
        $request->validate([
            'name'=>'required|min:6',
            'price' =>'required|integer|not_in:0', 
            'description' =>'required|min:6',
        ]
    );
        $input =$request->all();
       

        if($image=$request->file("image")){
            $destinationPath="images/";
            $name=date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath,$name);
            $input["image"]="$name";
        }

        produit::create($input);

        return redirect()
            ->route('produit')
            ->withStatus('product successfully added.');

          
        

    }

    public function edit(produit $produit){
        $categories = Category::all();
        return view("produits.editProduit",compact("produit","categories"));
    }

    public function update(Request $request,produit $produit){
        $input =$request->all();
        if($image=$request->file("image")){
            $destinationPath="images/";
            $name=date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath,$name);
            $input["image"]="$name";
        }

        $produit->update($input);

        return redirect()
            ->route('produit')
            ->withStatus('product successfully added.');
    }

    public function  destroy(produit $produit){
        $produit->delete();
        return redirect()->route("produit")->with("sucsess","product deleted successfully");
    }
}
