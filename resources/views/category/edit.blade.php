@extends("layouts.main")
@section("content")

    <form class="form-inline"  method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">商品分类名称</label>
            <input type="text" class="form-control" id="name" placeholder="商品分类名称" name="name" value="{{$category->name}}">
        </div>
        <button type="submit" class="btn btn-default">修改</button>
    </form>
@endsection