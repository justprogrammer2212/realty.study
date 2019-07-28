<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function articles() {
        $articles = Articles::orderBy('id', 'DESC')->paginate(5);
        return view('index', compact('articles'));
    }
}
