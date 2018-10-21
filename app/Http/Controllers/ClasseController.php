<?php

namespace App\Http\Controllers;

use App\Models\classe;
use Illuminate\Http\Request;
use Psy\Command\ListCommand\ClassEnumerator;

class ClasseController extends Controller
{
    //显示
    public function index()
    {
        $classes=classe::all();
        return view("classe.index",compact('classes'));
    }
    //添加
    public function add(Request $request)
    {
        if ($request->isMethod("post")){
            if (Classe::create($request->post())) {
                return redirect("/classe/index");
            }
        }
        return view("classe.add");
    }
    //编辑
    public function edit(Request $request,$id)
    {
        $classe=Classe::find($id);
        if ($request->isMethod("post")){
            if ($classe->update($request->post())) {
                return redirect("/classe/index");
            }
        }
        return view("goods.edit", compact("goods", "rows"));
    }
    //删除
    public function del($id)
    {
        $classe=Classe::find($id);
        if ($classe->delete()){
            return redirect()->route("classe.index");
        }
    }

}
