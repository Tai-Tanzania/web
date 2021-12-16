<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PagesController extends Controller
{
    public function index() 
    {
        $articles = Article::take(3)->get();
        return view('partners.index',\compact('articles'));
    }

    public function about()
    {
        return view('partners.about');
    }

    public function history()
    {
        return view('partners.history');
    }

    public function duty()
    {
        return view('partners.duty');
    }

    public function strategy()
    {
        return view('partners.strategy');
    }

    public function actions()
    {
        return view('partners.actions');
    }

    public function animations()
    {
        return view('partners.animations');
    }

    public function approach()
    {
        return view('partners.approach');
    }

    public function careers()
    {
        return view('partners.careers');
    }

    public function comics()
    {
        return view('partners.comics');
    }

    public function community()
    {
        return view('partners.community');
    }

    public function donation()
    {
        return view('partners.donation');
    }

    public function handling()
    {
        return view('partners.handling');
    }

    public function partner()
    {
        return view('partners.partner');
    }

    public function story()
    {
        return view('partners.story');
    }

    public function sponsor()
    {
        return view('partners.sponsor');
    }

    public function team()
    {
        return view('partners.team');
    }
}
