<?php


namespace App\Http\Controllers;


use App\Models\Categories;
use App\Models\Offers;
use App\User;

class OffersController extends Controller
{
    public function offers() {


        $offers = Offers::orderBy('id','DESC')->paginate(10);
        $categories = Categories::get();

        return view('offers.offers', compact('offers', 'categories'));

    }
    public function delete(Offers $parametr) {
        $parametr->delete();
        return redirect()->route('offers');
    }

}