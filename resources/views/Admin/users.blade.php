@extends('layouts.app')

@section('content')
    <style>
        .btn-sm{
            background-color: #013C5C;
            color:white;
        
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
    <!-- <div class="top-content row" id="content">
        <form class="d-flex col-md-4 offset-2">
                <input class="form-control form-control-sm me-2 rounded-pill text-center"  type="search" placeholder="Search ser" aria-label="Search" onkeyup="getUsers(this.value)">
        </form>
        <div class="filter col-md-4 offset-2">
            <label for="" class="offset-4">Filter Users</label>
            <div class="row" style="backgroud-color:green">
                <label for="" class="col ">By Division</label>
                <select name="divisionId" id="" class="form-control form-control-sm col-md-7 form-select" style="">
                    <option >All</option>
                    @foreach($divisions as $division)
                    <option value="{{$division -> divisionId}}">{{$division -> divisionTitle}}</option>
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
    


    <div id="content" class="container mt-5 content">
        {{-- <div class="form-group">
        <form class="form-inline " action="" method="GET">
            <input class="form-control mr-sm-2 w-50 badge-pill" type="search"  name="search-query" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0 badge-pill" type="submit" style="background-color:#013C5C; ">Search</button>
          </form>
        </div> --}}

        <table class="table" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>User Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Rank</th>
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
                                <button class="btn-sm rounded">edit</button>
                            </a>    
                        </td>
                        <td>
                            <a href="<?php if($user->status == "Inactive") echo "activate"; else echo "deactivate" ?>?id={{$user -> id}}">
                                <button class="btn-sm rounded">
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
        
        
        <div class="d-flex justify-content-center">          
            {{ $users->links() }}   
            <style>
                .w-5{display: none;}
                </style>  
           </div>
    </div> 
    
   
@endsection