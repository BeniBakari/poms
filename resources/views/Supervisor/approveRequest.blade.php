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
                        <td>{{$request -> roleTitle}}</td>
                        <td>{{$request -> approveStatus}}</td>
                        <td>
                             <button type="button" class="btn btn-info badge-pill" data-toggle="modal" data-target="#viewRequetModel{{$request -> requestId}}">view</button>                          
                        </td>
                    </tr>
<<<<<<< HEAD
                    <div class="modal fade" id="viewRequetModel{{$request -> requestId}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class=" modal-fullscreen modal-dialog-centered" role="document">
=======
                    <div class="modal fade " id="viewRequetModel{{$request -> requestId}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog" role="document">
>>>>>>> ea50deae2c0e2db32f2abeea9769f2be2a604993
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Request View</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" >
                                    <div>
                                        <span  class="txt-center"><b>{{$request -> firstName}} {{$request -> lastName}}</b> of division <b>{{$request -> divisionTitle}}</b> requests  From <b>{{$request -> source}} </b> to <b>{{$request ->destination}}</b></span>
                                    </div>
                                    <div>

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
                                    ">{{$request -> approveStatus}}</b></span>


                                </div>
                                <div class="modal-footer">
                                    
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    
                                        <?php if($request -> approveStatus != "cancelled" && $request -> approveStatus != "approved" && $request -> approveStatus != "disapproved" ) 
                                        {
                                            if($request -> requestStatus >= Auth::user()->roleId){
                                            ?>
                                            <form method="post" action="/approve?requestId={{$request->requestId}}">
                                                @csrf
                                                <button type="submit" class="btn btn-success">Approve</button>   
                                            </form>
                                            <form method="post" action="/disapprove?requestId={{$request->requestId}}">
                                                @csrf
                                                 <button type="submit" class="btn btn-danger">Disaprove</button>
                                         </form>
                                        <?php }}?>
                                </div>
                            </div>
                        </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection