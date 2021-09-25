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
        @empty($requests)
        <div class="card w-75">
            <div class="card-body justify-content-center">
                <h3>          
                    WELCOME TO PERMISSION ONLINE MANAGEMENT SYSTEM (POMS).
                </h3>
                <p>
                    @if(Auth::user()->roleId == 4)
                        You can send request and download the request report in pdf formart after it has been approved the by the administration.
                    @endif

                    @if(Auth::user() -> roleId == 3 || Auth::user()->roleId ==2 )
                        You can approve or disapprove the request of the user.
                    @else(Auth::user()->roleId == 1)
                        You can Activate/Deactivate user account and register new User
                    @endif
                </p>
              

            </div>
        </div>
       @else
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
                        <td class="<?php if($request -> approveStatus == "cancelled" || $request -> approveStatus == "disapproved") {
                                            ?> text-danger<?php 
                                        }elseif ($request -> approveStatus == "approved") {
                                            ?> text-success <?php
                                        }
                                        ?>">{{$request -> approveStatus}}</td>
                        <td>
                             <button type="button" class="btn btn-info " data-toggle="modal" data-target="#viewRequetModel{{$request -> requestId}}">view</button>                          
                        </td>
                    </tr>
                    <div class="modal fade" id="viewRequetModel{{$request -> requestId}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered" role="document">
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
                                        }elseif($request -> approveStatus == "approved"){ ?>
                                                text-success
                                            <?php
                                        }?>
                                    ">{{$request -> approveStatus}}</b> </span>


                                </div>
                                <div class="modal-footer">
                                    @if($request -> approveStatus == "approved" || $request -> approveStatus == "disapproved")
                                            <a href="requestPdf?requestId={{$request->requestId}}" title="Download pdf">
                                                <button class="btn btn-success "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                                         <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                                </svg></button>
                                            </a>
                                    @endif
                                   @if($request -> approveStatus != "cancelled" && ($request -> approveStatus != "approved" && $request -> approveStatus != "disapproved"))
                                            <form method="post" action="/cancel?requestId={{$request->requestId}}">
                                                @csrf
                                                 <button type="submit" class="btn btn-danger">Cancel Request</button>
                                         </form>
                                        @endif
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        
                                </div>
                            </div>
                        </div>
                </div>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>

    

@endsection