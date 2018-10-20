@extends("layouts.main")
@section("content")

    <form class="form-inline"  method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">文章标题</label>
            <input type="text" class="form-control" id="title" placeholder="文章标题" name="title" value="{{$article->title}}">
        </div>
        <div class="form-group">
            <label for="author">文章作者</label>
            <input type="text" class="form-control" id="author" placeholder="文章作者" name="author" value="{{$article->author}}">
        </div>
        <div class="form-group">
            <label for="a_id">分类名称</label>
            <select name="a_id" >
                <option value="">请选择分类</option>
                @foreach($rows as $row)
                <option value="{{$row->c_id}}" <?php if($row['c_id'] === $article['a_id']) echo 'selected'?>>{{$row->name}}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="content">文章内容</label>
            <textarea name="content" id="content" cols="30" rows="10">{{$article->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-default">修改</button>
    </form>
@endsection