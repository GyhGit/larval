@extends("layouts.main")
@section("content")

    <form class="form-inline"  method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">商品名称</label>
            <input type="text" class="form-control" id="name" placeholder="文章标题" name="name" value="{{$goods->name}}">
        </div>
        <br><br>
        <div class="form-group">
            <label for="g_id">商品分类名称</label>
            <select name="g_id" id="">
                <option value="">请选择分类</option>
                @foreach($rows as $row)
                <option value="{{$row->id}}" <?php if($row['id'] === $goods['g_id']) echo 'selected'?>>{{$row->name}}</option>
                    @endforeach
            </select>
        </div>
        <br><br>
        <div class="form-group">
            <label for="price">商品价格</label>
            <input type="text" class="form-control" id="price" placeholder="商品价格" name="price" value="{{$goods->price}}">
        </div>
        <br><br>
        <div class="form-group">
            <label for="details">商品介绍</label>
            <textarea name="details" id="details" cols="30" rows="2">{{$goods->details}}</textarea>
        </div>
        <br><br>
        <div class="form-group">
            <label for="is_on_sale">是否上架</label>
            <input type="radio" name="is_on_sale" value="1" <?php if($goods['is_on_sale'] ===1) echo 'checked'?>>上架
            <input type="radio" name="is_on_sale" value="0" <?php if($goods['is_on_sale'] ===0) echo 'checked'?>>未上架
        </div>
        <br><br>
        <div class="form-group">
            <label  class="col-sm-2 control-label">个性头像</label>
            <div class="col-sm-10">
                <input type="file" class="" name="img" >
                <img src="/{{$goods->logo}}" width="50" alt="">
            </div>
        </div>
        <br><br>
        <button type="submit" class="btn btn-default">修改</button>
    </form>



@endsection