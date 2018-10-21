@extends("layouts.main")

@section("content")
    <div class="container-fluid">


        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="username" class="col-sm-2 control-label">用户名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="用户名" name="name" value="{{$user->name}}" >
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2   control-label">邮箱</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="邮箱" name="email" value="{{$user->email}}">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="密码" name="password" value="{{$user->password}}" >
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">确认密码</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="确认密码" name="password_confirmation" >
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">个性头像</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="img">
                    <img src="/{{$user->logo}}" width="50" alt="">
                </div>
            </div>




            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">修改</button>
                </div>
            </div>
        </form>


    </div>




@endsection