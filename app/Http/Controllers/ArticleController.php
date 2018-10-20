<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Classe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view("/article/index", compact('articles'));
    }

    public function add(Request $request)
    {
        if ($request->isMethod("post")) {
            if (Article::create($request->post())) {
                return redirect("/article/index");
            }
        }

        $rows = DB::select("select * from classes");

        return view("article.add", compact("rows"));
    }

    //编辑
    public function edit(Request $request, $id)
    {
        $article = Article::find($id);
        if ($request->isMethod("post")) {
            if ($article->update($request->post())) {
                return redirect("/article/index");
            }

        }

        $rows = Classe::all();

        return view("article.edit", compact("article", "rows"));
    }

    //删除
    public function del($id)
    {
        if (Article::find($id)->delete()) {
            return redirect("/article/index");
        }


    }


}
