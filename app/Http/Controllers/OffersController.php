<?php


namespace App\Http\Controllers;


use App\Models\Categories;
use App\Models\Offers;
use App\User;
use Illuminate\Http\Request;


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
    //Метод які додають дані в інпути
    public function  addOffer() {
        $categories = Categories::select('id', 'name')->get();
        $users = User::select('id', 'name')->get();
        return view('offers.offers-add', compact('categories', 'users'));
    }
    //Метод який отримує і опрацьовує дані
     public function  submitOffer(Request $request) {
         Offers::updateOrCreate([
             'title' => $request->input('title'),
             'price' => $request->input('price'),
             'currency' => $request->input('currency'),
             'description'=> $request->input('description'),
             'category_id' => $request->input('category'),
             'user_id' => $request->input('user'),
         ]);
         return redirect()->route('offers');
     }

     public function editOffer(Offers $offers) {
         $categories = Categories::select('id', 'name')->get();
         $users = User::select('id', 'name')->get();
        return view('offers.offers-edit', compact('offers', 'categories', 'users'));
     }

     public function submitedit(Request $request, Offers $offers) {
        $offers->title = $request->input('title');
        $offers->save();
        return redirect()->route('offers');
     }
}
