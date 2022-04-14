<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Offer;
use App\Mail\OfferMail;
use Illuminate\Support\Facades\Mail;

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
    public function store($id) {
        $product = Product::find($id);
        return view('create-offer', ['product' => $product]);
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
        $offer = Offer::find($id);
        Mail::to($offer->email)->send(new OfferMail($offer));
        return view('mail-form', ['offer' => $offer]);
    }

    public function sendMail(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'product'=>'required',
            'price' => 'required',
            'emailText' => 'required',
            'offerCase' => 'required',
            'adminoffer'=>'required'
         ]);
         $email = new OfferMail($request);
         Mail::to($request) // or Mail::to($request->email, $request->name)
             ->send($email);


    }

}
