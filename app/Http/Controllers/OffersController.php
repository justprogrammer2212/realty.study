<?php


namespace App\Http\Controllers;


use App\Models\Categories;
use App\Models\Offers;

class OffersController extends Controller
{
    public function offers() {
        $offers = Offers::orderBy('id', 'DESC')->paginate(10);
        $categories = Categories::get();
        return view('offers.offers', compact('offers','categories'));
    }
    public function offer(Offers $show) {
        return view('offers.offer', compact('show'));
    }
}
