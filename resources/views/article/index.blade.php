@extends("layouts.main")
@section("content")

    <a href="{{route("article.add")}}" class="btn btn-info">添加</a>

    <table class="table">
        <tr>
            <th>文章编号</th>
            <th>文章标题</th>
            <th>文章作者</th>
            <th>分类id</th>
            <th>文章内容</th>
            <th>操作</th>
        </tr>
@foreach($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->title}}</td>
            <td>{{$article->author}}</td>
            <td>{{$article->classe->name}}</td>
            <td>{{$article->content}}</td>
            <td>
                <a href="{{route("article.edit",$article->id)}}" class="btn btn-success">编辑</a>
                <a href="{{route("article.del",$article->id)}}" class="btn btn-danger">删除</a>
            </td>
        </tr>
@endforeach



    </table>



@endsection