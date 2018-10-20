<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GoodsController extends Controller
{
    //显示
    public function index()
    {
        $goodss=Goods::all();
        return view("/goods/index",compact("goodss"));
    }
    //添加
    public function add(Request $request)
    {
        if ($request->isMethod("post")){
            //dd($request->post());
            if (Goods::create($request->post())){
                return redirect("/goods/index");
            }
        }

        $rows=DB::select("select * from categories");

        return view("goods.add",compact("rows"));
    }
    //编辑
    public function edit(Request $request, $id)
    {
        $goods = Goods::find($id);
        if ($request->isMethod("post")) {
            if ($goods->update($request->post())) {
                return redirect("/goods/index");
            }
        }
        $rows =Category::all();
        return view("goods.edit", compact("goods", "rows"));
    }
    //更多
    public function gd(Request $request, $id)
    {

        $re=DB::table('goods')
            ->where('id', $id)
            ->increment('browse', 1000);
        $rows =Category::all();
        $goods = Goods::find($id);
        return view("goods.gd", compact("goods", "rows"));

    }
    //删除
    public function del($id)
    {
        if (Goods::find($id)->delete()) {
            return redirect("/goods/index");
        }
    }

}
