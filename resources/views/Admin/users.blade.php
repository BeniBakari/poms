@extends('layouts.app')

@section('content')
    <style>
        .btn-sm{
            background-color: #013C5C;
            color:white;
            border: none;
        
        }
        /* .content{
            margin-top: 10px;
            background-color: #db350b;
        } */
        tr:nth-child(even) {
                    background-color: #dddddd;
                    } 
        .top-content{
           
        }  
    </style>   
    <!-- <div class="top-content row rows">
        <form class="d-flex col-md-4 offset-2 pt-5">
                <input class="form-control form-control  rounded-pill text-center"  type="search" placeholder="search by email or last name" aria-label="Search" onkeyup="getUsers(this.value)" autofocus>
        </form>
        <div class="filter col-md-4 offset-2 pt-4">
            <label for="" class="offset-4">Filter Users</label>
            <div class="row" style="backgroud-color:green;">
                <label for="" class="col ">By Division</label>
                <select name="divisionId" id="" class="form-control form-control-sm col-md-7 form-select rounded-pill" onchange="getUsers(this.value)">
                    <option value="">All</option>
                    @foreach($divisions as $division)
                    <option value="division{{$division -> divisionId}}">{{$division -> divisionTitle}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row" style="margin-top: 20px;">
                <label for="" class="col">By Rank</label>
                <select name="divisionId" id="" class="form-control form-control-sm col-md-7 form-select" style="">
                    <option >All</option>
                    <option value="1">Immediate Supervisor</option>
                    <option value="2">DAHRAM</option>
                </select>
            </div>
        </div>

        
    </div> -->

    <div id="content" class="container mt-4">
           
        <table class="table table-responsive " >
            <thead class="text-white table-header" >
                <tr>
                    <th>#</th>
                    <th>User Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Designation</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $num=0; ?>
                @foreach($users as $user)  
                    <tr>
                        <td><?php echo ++$num; ?></td> 
                        <td>{{$user -> id}}</td>
                        <td>{{$user -> firstName}} {{$user -> lastName}}</td>
                        <td>{{$user -> email}}</td>
                        <td style="<?php if($user->status == "Inactive") {?> color:red; <?php }?>">{{$user -> status}}</td>
                        <td>{{$user -> rankName}}</td>
                        <td>
                            <a href="profile?id={{$user -> id}}">
                                <button class=" btn btn-primary btn-sm rounded-pill">edit</button>
                            </a>    
                        </td>
                        <td>
                            <a href="<?php if($user->status == "Inactive") echo "activate"; else echo "deactivate" ?>?id={{$user -> id}}">
                                <button class="btn btn-primary btn-sm rounded-pill">
                                    <?php 
                                        if($user->status == "Inactive") echo "Activate";
                                        else echo "Deactivate";
                                    ?>
                                </button>
                            </a> 
                        </td>
                    </tr>
                @endforeach
                
            </tbody>         
        </table>  
        
        {{ $users->links() }} 
        
        
    </div> 
       
    
    
    <script>
        function getUsers(str)
        {  
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("content").innerHTML = this.responseText;
            }
  };
        xhttp.open("get", "filtered?value="+str, true);
        xhttp.send();            
        }
    </script>
    {{-- {!! $users->render() !!}  --}}
@endsection