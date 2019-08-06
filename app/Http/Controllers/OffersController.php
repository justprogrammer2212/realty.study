<?php


namespace App\Http\Controllers;


use App\Http\Request\OffersRequest;
use App\Models\Categories;
use App\Models\Offers;
use App\User;
use Illuminate\Http\Request;

class OffersController extends Controller
{
//$dogs = Dogs::orderBy('id', 'desc')->take(5)->get();
    public function offers() {
        $offers = Offers::Where('id', '<', '10')->select('title','price','description')->limit(2)->get();
        $categories = Categories::get();
        return view('offers.offers', compact('offers','categories'));
    }
    public function offer(Offers $show) {
        return view('offers.offer', compact('show'));
    }

    public function addOffer() {
        $categories = Categories::select('id', 'name')->get();
        $users = User::select('id', 'name')->get();
        return view('offers.offers-add', compact('categories','users'));
    }

    public function submitOffer(OffersRequest $request) {
        Offers::updateOrcreate([
            'title' => $request->input('title'),
            'price' => $request->input('price'),
            'currency' => $request->input('currency'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category'),
            'user_id' => $request->input('user'),
        ]);

        return redirect()->route('offers');
    }

    public function editOffer(Offers $offers_id) {
        $categories = Categories::select('id', 'name')->get();
        $users = User::select('id', 'name')->get();
        return view('offers.offers-edit', compact('offers_id', 'categories', 'users'));
    }

    public function updateOffer(Request $request, Offers $offers_id) {
        $offers_id->title = $request->input('title');
        $offers_id->price = $request->input('price');
        $offers_id->currency = $request->input('currency');
        $offers_id->description = $request->input('description');
        $offers_id->category_id = $request->input('category');
        $offers_id->user_id = $request->input('user');
        $offers_id->save();
        return redirect()->route('offers');
    }

    public function deleteOffer(Offers $offers_id) {
        $offers_id->delete();
        return redirect()->route('offers');
    }
}
