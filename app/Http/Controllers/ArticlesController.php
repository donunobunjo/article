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
    /**
     * @OA\Info(
     *   title="Articles API",
     *   version="1.0",
     *   @OA\Contact(
     *     email="don.unobunjo@gmail.com",
     *     name="Support Team"
     *   )
     * )
     * @OA\Get(
     *     path="/articles",
     *     operationId="/articles",
     *     @OA\Parameter(
     *         name="articles",
     *         in="path",
     *         description="The articles parameter in path",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Fetch all articles",
     *         @OA\JsonContent()
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Error: Bad request. When required parameters were not supplied.",
     *     ),
     * )
     * @OA\Get(
     *     path="/articles/{id}",
     *     operationId="/articles/{id}",
     *     tags={"yourtag"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="id",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Returns an article",
     *         @OA\JsonContent()
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Error: Bad request. When required parameters were not supplied.",
     *     ),
     * )
     */
    
    public function showAllArticles(){
        return response()->json(Article::all());
    }
    
    public function showOneArticle($id){
        return response()->json(Article::find($id));
    }
    public function showArticleComments($id){
       return response()->json(Article::find($id,['comment']));
    }
    public function showArticleLikes($id){
        return response()->json(Article::find($id,['likes']));
     }
     public function showArticleViews($id){
        return response()->json(Article::find($id,['views']));
     }
}
