<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //显示
    public function index()
    {
        $categorys=Category::all();
        return view("/category/index",compact("categorys"));
    }
    //添加
    public function add(Request $request)
    {
        if ($request->isMethod("post")){
            if(Category::create($request->post())){
                return redirect("/category/index");
            }
        }
        return view("category.add");
    }

    //编辑
    public function edit(Request $request,$id)
    {
        $category=Category::find($id);
        if ($request->isMethod("post")){
            if ($category->update($request->post())) {
                return redirect("/category/index");
            }
        }
        return view("category.edit",compact('category'));
    }
    //删除
    public function del($id)
    {
        $category=Category::find($id);
        if ($category->delete()){
            return redirect()->route("category.index");
        }
    }
}
