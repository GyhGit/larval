@extends("layouts.main")
@section("content")
    <div class="row">
        <div class="col-md-4">
            <a href="{{route("goods.add")}}" class="btn btn-info">添加</a>
        </div>
        <div class="col-md-8">
            <form class="form-inline pull-right" method="get" action="">
                <div class="form-group">
                    <select name="cate_id" class="form-control">
                        <option value="">请选择分类</option>
                        @foreach($cate as $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="最低价" size="5" name="minPrice">
                </div>
                -
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="最高价" size="5" name="maxPrice">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="请输入名称" name="keyword">
                </div>
                <button type="submit" class="btn btn-primary">搜索</button>
            </form>
        </div>
    </div>

    <table class="table">
        <tr>
            <th>商品编号</th>
            <th>商品名称</th>
            <th>分类名称</th>
            <th>商品价格</th>
            <th>商品详情</th>
            <th>是否上架</th>
            <th>浏览次数</th>
            <th>个性头像</th>
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
            <td><img src="/{{$goods->logo}}" width="50" alt=""></td>


            <td>
                <a href="{{route("goods.gd",$goods->id)}}" class="btn btn-success">更多</a>
                <a href="{{route("goods.edit",$goods->id)}}" class="btn btn-success">编辑</a>
                <a href="{{route("goods.del",$goods->id)}}" class="btn btn-danger">删除</a>
            </td>
        </tr>
@endforeach



    </table>
{{--{{$goodss->links()}}--}}
    {{$goodss->appends($url)->links()}}


@endsection