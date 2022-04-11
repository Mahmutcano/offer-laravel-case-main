<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
    public function store() {
        $product = Product::all();
        return view('create-offer', ['products' => $product]);
    }

    /**
     * Var olan teklifi onaylar
     */
    public function confirm() {
        $product = Product::all();
        return view('list-offer', ['products' => $product]);
    }
}
