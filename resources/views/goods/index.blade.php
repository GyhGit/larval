@extends("layouts.main")
@section("content")

    <a href="{{route("goods.add")}}" class="btn btn-info">添加</a>

    <table class="table">
        <tr>
            <th>商品编号</th>
            <th>商品名称</th>
            <th>分类名称</th>
            <th>商品价格</th>
            <th>商品详情</th>
            <th>是否上架</th>
            <th>浏览次数</th>
            <th>操作</th>
        </tr>
@foreach($goodss as $goods)
        <tr>
            <td>{{$goods->id}}</td>
            <td>{{$goods->name}}</td>
            <td>{{$goods->category->name}}</td>
            <td>{{$goods->price}}</td>
            <td>{{$goods->details}}</td>
            <td><?php if ($goods['is_on_sale']===1)
            {echo "上架";}
            else{echo "未上架";} ?></td>
            <td>
                {{$goods->browse}}
            </td>

            <td>
                <a href="{{route("goods.gd",$goods->id)}}" class="btn btn-success">更多</a>
                <a href="{{route("goods.edit",$goods->id)}}" class="btn btn-success">编辑</a>
                <a href="{{route("goods.del",$goods->id)}}" class="btn btn-danger">删除</a>
            </td>
        </tr>
@endforeach



    </table>



@endsection