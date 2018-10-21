@extends("layouts.main")
@section("content")


    <table class="table table-bordered" >
        <tr>
            <th>用户编号</th>
            <th>用户名</th>
            <th>email</th>
            <th>个性头像</th>
            <th>操作</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><img src="/{{$user->logo}}" width="50" alt=""></td>
                <td>
                    <a href="{{route("user.edit",$user->id)}}" class="btn btn-success">编辑</a>
                    <a href="{{route("user.del",$user->id)}}" class="btn btn-danger">删除</a>
                </td>
            </tr>
        @endforeach



    </table>



@endsection