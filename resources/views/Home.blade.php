<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task3 API</title>
    <style>
        label{
            display: inline-block; 
            width: 150px;
            margin: 10px 0px
        }
        th , td {
            padding-right: 15px;
        }
        .errors{
            background: red; 
        }
        .ok{
            background: green; 
        }
        .errors , .ok{
            width:fit-content;
            padding: 5px; 
            color : white; 
        }
        input[type='submit']{
            margin:15px 0px ; 
        }
    </style>
</head>
<body>
    <h1>Laravel Task 3 (API)</h1><hr>   
    @if ($errors->any)
        @foreach ($errors->all() as $error)
            <p class="errors">{{$error}}</p>
        @endforeach
    @endif
    @if(session('ok')) 
        <p class="ok">{{session('ok')}}</p>
    @endif
    <form action="register" , method="post">
        @csrf
        <div>
            <label for="">User Name</label>
            <input type="text" name="name" id="">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email" id="">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" id="">
        </div>
        <div>
            <label for="">Confirm Password</label>
            <input type="password" name= "password_confirmation" id="">
        </div>
        <input type="submit" name="" id="" value="Register">
        <br><a href="{{url('seed')}}">Make Seed</a><br>
        <br><a href="{{url('deleteall')}}">Delete All Users</a>
    </form><hr>
    <h3>APIs</h3>
    <table>
        <thead>
            <th>API Link</th>
            <th>Description</th>
        </thead>
        <tr>
            <td>http://localhost/api/users</td>
            <td>Get All Users</td>
        </tr>
        <tr>
            <td>http://localhost/api/Users/[id]</td>
            <td>Get User By ID</td>
        </tr>
        <tr>
            <td>http://localhost/api/users/[name]</td>
            <td>Get User By Name</td>
        </tr>
        <tr>
            <td>http://localhost/api/users/[email]</td>
            <td>Get User By Email</td>
        <tr>
            <td>http://localhost/api/users/add</td>
            <td>Create New User with fields = ('name' , 'password' , 'email')</td>
        </tr>
        <tr>
            <td>http://localhost/api/login</td>
            <td>Get User Token with fields = ('email' , 'password')</td>
        </tr>
    </table><hr><br>
    <table>
        @if(count($Users))
        <h3>Users</h3>
            <thead>
                <th>User Name</th>
                <th>Email</th>
                <th>Delete</th>
            </thead>
            @foreach($Users as $User)
                <tr>
                    <td>{{$User->name}}</td>
                    <td>{{$User->email}}</td>
                    <td><a href="{{url('delete')}}?id={{$User->id}}">Delete</a></td>
                </tr>
            @endforeach
        @else
                <p>Users Table is Empty!</p>
        @endif
    </table>

</body>
</html>