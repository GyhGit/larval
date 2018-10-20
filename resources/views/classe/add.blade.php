@extends("layouts.main")
@section("content")

    <form class="form-inline"  method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">分类名称</label>
            <input type="text" class="form-control" id="name" placeholder="分类名称" name="name">
        </div>
        <div class="form-group">
            <label for="c_id">文章id</label>
            <input type="text" class="form-control" id="c_id" placeholder="文章id" name="c_id">
        </div>
        <button type="submit" class="btn btn-default">添加</button>
    </form>



@endsection