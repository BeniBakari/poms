<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @include('layouts.web_header')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <style>
        .btn-sm{
            background-color: #013C5C;
            color:white;
        
        }
    </style>
</head>
<body>
    @include('layouts.header')
    @include('layouts.footer')
    <form class="d-flex col-md-4 offset-4">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    </form>
    <!-- <div style="float:left; width:300px;">
        @include('layouts.navbar')
    </div> -->
    <div id="content">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Acc Status</th>
                    <th>Rank</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user -> id}}</td>
                        <td>{{$user -> firstName}}</td>
                        <td>{{$user -> lastName}}</td>
                        <td>{{$user -> email}}</td>
                        <td>{{$user -> status}}</td>
                        <td>Officer</td>
                        <td>
                            <button class="btn-sm rounded">edit</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>