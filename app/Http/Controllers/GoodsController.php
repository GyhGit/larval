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
    public function index(Request $request)
    {


        //接收
        $cateId = $request->get("cate_id");
//        dd($cateId);
        $keyword = $request->get("keyword");
        $minPrice = $request->get("minPrice");
        $maxPrice = $request->get("maxPrice");

        //得到所有并要有分页
        $query = Goods::orderBy("id");

        if ($keyword !== null) {

            $query->where("name", "like", "%{$keyword}%");
        }

        if ($minPrice !== null) {
            $query->where("price", ">=",$minPrice);

        }
        if ($maxPrice !== null) {
            $query->where("price", "<=",$maxPrice);
        }


        if ($cateId !== null) {
            $query->where("g_id", $cateId);
        }
        $goodss = $query->paginate(2);
        $cate = Category::all();
        return view("/goods/index", compact("goodss", "cate"));
    }

    //添加
    public function add(Request $request)
    {

        if ($request->isMethod("post")) {
            $data=$request->post();
            $data['logo']=$request->file("img")->store("images","image");
            //添加
            Goods::create($data);
            return redirect("/goods/index");
        }

        $rows = DB::select("select * from categories");

        return view("goods.add", compact("rows"));
    }

    //编辑
    public function edit(Request $request, $id)
    {
        $goods = Goods::find($id);
        if ($request->isMethod("post")) {

            //接收数
            $data = $request->post();

            $data['logo']=$request->file("img")->store("images","image");

            //判断是否上传了图片
           
            $goods->update($data);
                return  redirect("/goods/index");


        }

        $rows = Category::all();
        return view("goods.edit", compact("goods", "rows"));
    }

    //更多
    public function gd(Request $request, $id)
    {

        $re = DB::table('goods')
            ->where('id', $id)
            ->increment('browse', 1000);
        $rows = Category::all();
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
