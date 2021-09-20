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

<div id="content" class="content col-md-8">
        <button type="button" class="btn btn-info " data-toggle="modal" data-target="#addRegion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
        <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
        </svg></button>
        <table class="table" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>District Id</th>
                    <th>Region Name</th>
                    <th>District Name</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php $num=0; ?>
                @foreach($districts as $district)  
                    <tr>
                        <td><?php echo ++$num; ?></td> 
                        <td>{{$district -> district_councilId}}</td>
                        <td>{{$district -> regionName}} </td>
                        <td>{{$district -> districtName}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="modal fade" id="addRegion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New District</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/addDistrict" class="">
        @csrf
                <div class="form-inputs mb-3 row">
                    <label for="" class="float-left col-md-3" style="margin-right:2%"> Name</label>
                    <input type="text" name="districtName" class="form-control col-md-6 text-center form-inputs"  placeholder="Korogwe" autofocus required>
					          @error('districtName')
                         <strong><span style="color: red; font-size: 80%;">{{$message}}</span></strong><br>
                     @enderror
                </div>
                <div class="mb-3">
                    Select region 
                    <select name="region" class="form-select "> region
                                <option value=" ">Select region</option>
                                @foreach($regions as $region)
                                <option value="{{$region -> regionId}}" >{{$region->regionName}}</option>
                                @endforeach
                    </select>
                    @error('region')
                         <strong><span style="color: red; font-size: 80%;">{{$message}}</span></strong><br>
                     @enderror    
                </div>
                <div class="form-button text-center">
                    <button type="submit" class="btn btn-primary col-md-4" style="background-color:#013c5c; border-radius:20px;" >Add District</button>
          		</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
      </div>
    </div>
  </div>
</div>
</div>    
@endsection