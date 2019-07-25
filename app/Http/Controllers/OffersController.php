<?php


namespace App\Http\Controllers;


class OffersController extends Controller
{
    public function offers() {
        return view('offers.offers');
    }
}