@extends("layouts.main")
@section("content")

    <form class="form-inline"  method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">商品名称</label>
            <input type="text" class="form-control" id="name" placeholder="文章标题" name="name">
        </div>
        <br><br>
        <div class="form-group">
            <label for="g_id">商品分类名称</label>
            <select name="g_id" id="">
                <option value="">请选择分类</option>
                @foreach($rows as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
            </select>
        </div>
        <br><br>
        <div class="form-group">
            <label for="price">商品价格</label>
            <input type="text" class="form-control" id="price" placeholder="商品价格" name="price">
        </div>
        <br><br>
        <div class="form-group">
            <label for="details">商品介绍</label>
            <textarea name="details" id="details" cols="30" rows="2"></textarea>
        </div>
        <br><br>
        <div class="form-group">
            <label for="details">是否上架</label>
            <input type="radio" name="is_on_sale" value="1">上架
            <input type="radio" name="is_on_sale" value="0">未上架
        </div>
        <br><br>
        <button type="submit" class="btn btn-default">添加</button>
    </form>



@endsection