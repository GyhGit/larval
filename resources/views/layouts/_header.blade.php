<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">牛掰博客</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#">帮助 <span class="sr-only">(current)</span></a>
                </li>

                <li>
                    <a href="#">牛掰关于</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">牛掰详情 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">牛掰海鲜</a>
                        </li>
                        <li>
                            <a href="#">牛掰飞禽</a>
                        </li>
                        <li>
                            <a href="#">牛掰走兽</a>
                        </li>
                        <li>
                            <a href="#">牛掰荤</a>
                        </li>
                        <li>
                            <a href="#">牛掰素</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="#">牛掰</a>
                        </li>
                    </ul>
                </li>

                <li class="dl-horizontal">
                    <a href="{{route("user.reg")}}">用户注册 <span class="sr-only">(current)</span></a>
                </li>
                <li class="dl-horizontal">
                    <a href="{{route("user.index")}}">用户列表 <span class="sr-only">(current)</span></a>
                </li>
                {{--<li class="dl-horizontal">--}}
                    {{--<a href="{{route("user.login")}}">用户登录 <span class="sr-only">(current)</span></a>--}}
                {{--</li>--}}
            </ul>

            @auth
                <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{\Illuminate\Support\Facades\Auth::guard("web")->user()->name}} <span class="right"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">修改资料</a></li>

                        <li role="separator" class="divider"></li>
                        <li><a href="{{route("user.logout")}}">退出登录</a></li>
                    </ul>
                </li>
                    </ul>

            @endauth

            @guest   



            <ul class="nav navbar-nav navbar-right">
                <img src="" alt="" id="img" width="50">
                <li id="login-li">
                    <a href="{{route("user.login")}}" data-toggle="modal">登录</a>
                </li>
                <li id="login-li">
                    <a href="{{route("user.reg")}}" data-toggle="modal">注册</a>
                </li>
            </ul>
            @endguest













        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>