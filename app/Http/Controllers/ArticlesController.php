<?php

namespace App\Http\Controllers;
use App\Models\Article;

class ArticlesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showAllArticles(){
        return response()->json(Article::all());
    }
}
