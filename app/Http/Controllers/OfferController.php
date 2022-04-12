<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Offer;

class OfferController extends Controller
{
    /**
     * Tüm teklifleri listeler
     */
    public function list() {
       $product = Product::all();
       return view('list', ['products' => $product]);
    }

    /**
     * Yeni teklif oluşturur
     */
    public function store(Request $req, $id) {

        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'city' => 'required',
            'price' => 'required',
            'product' => 'required',
            'message' => 'required'
        ]);

        $offer= new Offer;
        $offer->name=$req->name;
        $offer->email=$req->email;
        $offer->city=$req->city;
        $offer->price=$req->price;
        $offer->product=$req->product;
        $offer->message=$req->message;
        $offer->save();
        $product = Product::find($id);
        return view('create-offer{id}', ['product' => $product]);
    }

    /**
     * Var olan teklifi onaylar
     */
    public function confirm() {
        $product = Product::all();
        return view('list-offer', ['products' => $product]);
    }
}
