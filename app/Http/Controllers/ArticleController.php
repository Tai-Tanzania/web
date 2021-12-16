<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('partners.articles', \compact('articles'));
    }

    public function article($id){
        $article = Article::find($id);
        return view('partners.article', \compact('article'));
    }
}   
