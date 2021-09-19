@extends('layouts.app')
@section('content')
    <style>
        .btn-sm{
            background-color: #013C5C;
            color:white;
        
        }
        .content{
            margin-top: 10px;
        }
        tr:nth-child(even) {
                    background-color: #dddddd;
                    } 
        .top-content{
           
        }  
    </style>   
    
 
    
    <div id="content" class="content">
        <table class="table" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>Request No:</th>
                    <th>From</th>
                    <th>request Type</th>
                    <th>Destination</th>
                    <th>Status</th>
                    <th>Approve Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $num=0; ?>
                @foreach($requests as $request)  
                    <tr>
                        <td><?php echo ++$num; ?></td> 
                        <td >{{$request -> requestId}}</td>
                        <td>{{$request -> source}}</td>
                        <td>{{$request -> requestType}}</td>
                        <td>{{$request -> destination}}</td>
                        <td>{{$request -> requestStatus}}</td>
                        <td>{{$request -> approveStatus}}</td>
                        <td>
                             <button type="button" class="btn btn-info " data-toggle="modal" data-target="#viewRequetModel{{$request -> requestId}}">view</button>                          
                        </td>
                    </tr>
                    <div class="modal fade" id="viewRequetModel{{$request -> requestId}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Request View</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div>
                                        <span  class="txt-center">From {{$request -> source}} to {{$request ->destination}}</span>
                                    </div>
                                    <div>
                                        <label for="">Description</label>
                                        <p>{{$request -> requestDesc}}</p>
                                    </div>
                                    <span>Start Date: <b>{{$request-> startDate}}, </b> End Date <b>{{$request ->endDate}}</b></span><br>
                                    <span>Approval Status <b class="
                                        <?php if($request -> approveStatus == "cancelled" || $request -> approveStatus == "disapproved") {
                                            ?> text-danger<?php
                                        }else{ ?>
                                                text-success
                                            <?php
                                        }?>
                                    ">{{$request -> approveStatus}}</b> </span>


                                </div>
                                <div class="modal-footer">
                                    
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <?php if($request -> approveStatus != "cancelled" || $request -> approveStatus == "approved" || $request -> approveStatus == "disapproved") {?>
                                            <!-- <form method="post" action="/cancel?requestId={{$request->requestId}}">
                                                @csrf -->
                                                 <button type="submit" class="btn btn-danger">Cancel Request</button>
                                         <!-- </form> -->
                                        <?php }?>
                                </div>
                            </div>
                        </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>

    

@endsection