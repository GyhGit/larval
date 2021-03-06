@extends("layouts.main")
@section("content")

    <a href="{{route("category.add")}}" class="btn btn-info">添加</a>

    <table class="table">
        <tr>
            <th>商品分类编号</th>
            <th>商品分类名称</th>
            <th>操作</th>
        </tr>
@foreach($categorys as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>

            <td>
                <a href="{{route("category.edit",$category->id)}}" class="btn btn-success">编辑</a>
                <a href="{{route("category.del",$category->id)}}" class="btn btn-danger">删除</a>
            </td>
        </tr>
@endforeach



    </table>



@endsection