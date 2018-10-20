@extends("layouts.main")
@section("content")



    <table class="table">
        <tr>
            <th>商品编号</th>
            <th>商品名称</th>
            <th>分类名称</th>
            <th>商品价格</th>
            <th>商品详情</th>
            <th>是否上架</th>
            <th>浏览次数</th>
         
        </tr>

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


            </tr>




    </table>



@endsection