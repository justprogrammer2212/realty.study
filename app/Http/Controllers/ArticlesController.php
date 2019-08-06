<?php

namespace App\Http\Controllers;
use App\Http\Request\ArticleRequest;
use App\Models\Articles;
use App\User;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function articles() {
        $articles = Articles::orderBy('id', 'DESC')->paginate(5);
        return view('index', compact('articles'));
    }

    public function addArticle() {
        $users = User::select('id', 'name')->get();
        return view('articles.article-add', compact('users'));
    }

    public function submitArticle(ArticleRequest $request) {
        Articles::updateOrcreate([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'user_id' => $request->input('user'),
        ]);

        return redirect()->route('index');
    }

    public function editArticle(Articles $article_id) {
        $users = User::select('id', 'name')->get();
        return view('articles.article-edit', compact('article_id', 'users'));
    }

    public function submitedit(Request $request, Articles $articles_id) {
        $articles_id->title = $request->input('title');
        $articles_id->description = $request->input('description');
        $articles_id->user_id = $request->input('user');
        $articles_id->save();
        return redirect()->route('index');
    }

    public function deleteArticle(Articles $id_articles) {
        $id_articles->delete();
        return redirect()->route('index');
    }
}
