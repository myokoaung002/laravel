<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index() {
        $data = Article::latest()->paginate(5);
        return view("articles.index", [
            'articles' => $data
        ]);
    }

    public function detail($id) {
        $data = Article::find($id);
        return view("articles.detail", [
            'article' => $data
        ]);
    }

    public function add(){
        $data = [
            ["id" => 1, "name" => "HTML"],
            ["id" => 2, "name" => "CSS"],
            ["id" => 3, "name" => "JS"],
            ["id" => 4, "name" => "PHP"],
            ["id" => 5, "name" => "Laravel"],
        ];
        return view("articles.add", [
            "categories" => $data
        ]);
    }

    public function create(){
        $validator = validator(request()->all(), [
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $article = new Article;
        $article->title = request()->title;
        $article->body = request()->body;
        $article->category_id = request()->category_id;
        $article->save();
        return redirect("/articles");
    }

    public function delete($id){
        $data = Article::find($id);
        $data->delete();
        return redirect("/articles")->with('info', "Article Delete");
    }

    public function __construct(){
         $this->middleware('auth')->except(['index', 'detail']);
    }
}
