@extends("layouts.main")

@section("content")

    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{route("user.reg")}}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="用户名" name="name" value="{{old("name")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">邮箱</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="邮箱" name="email" value="{{old("email")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="密码" name="password" value="{{old("password")}}">
            </div>
        </div>

        <div class="form-group">
            <label  class="col-sm-2 control-label">确认密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" placeholder="确认密码" name="password_confirmation" value="{{old("password_confirmation")}}">
            </div>
        </div>

        <div class="form-group">
            <label  class="col-sm-2 control-label">个性头像</label>
            <div class="col-sm-10">
                <input type="file" class="" name="img">

            </div>
        </div>

        <div class="form-group">
            <label  class="col-sm-2 control-label">验证码</label>
            <div class="col-sm-10">

                <input id="captcha" class="form-control" name="captcha"  placeholder="请输入验证码">
                <img class="thumbnail captcha" src="{{captcha_src('flat')}}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">
            </div>
        </div>




        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">注册</button>
            </div>
        </div>
    </form>

@endsection