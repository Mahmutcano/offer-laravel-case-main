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
       $product = Product::paginate(7);
       return view('list', ['products' => $product]);
    }

    /**
     * Yeni teklif oluşturur
     */
    public function store() {
        $product = Product::all();
        return view('create-offer', ['products' => $product]);
    }

    public function offerForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'product'=>'required',
            'price' => 'required'
         ]);
        //  Store data in database
        Offer::create($request->all());
        return redirect()->back()->withErrors('Offer Send')->withInput();
    }

    /**
     * Var olan teklifi onaylar
     */
    public function offerList() {
        $offers = Offer::paginate(7);
        return view('list-offer', ['offers' => $offers]);
    }

    public function confirm($id) {
        $offers = Offer::find($id);
        return view('mail-form', ['offer' => $offers]);
    }


}
