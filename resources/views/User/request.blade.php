@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="text-center">Make Request</h3>
    </div>
    <form method="POST" action="/makeRequest" >
        @csrf
    <div class="card-body ">
        <div class="row ">
               <div class="col offset-3">
                    <label for="requestType" class="float-left"  style="margin-right:10%">Permission Type</label>
                    <select name="requestType" id="" class="form-control form-control-sm form-select col-md-4">
                        <option>Select</option>
                        <option value="personal">Personal</option>
                        <option value="official">Official</option>
                    </select>
                    @error('requestType')
                      <strong><span style="color: red; font-size: 80%;">{{$message}}</span></strong><br>
                     @enderror 
                 </div>
            </div><br>
        <div class="row">
            <div class="col">
                <label for="" class="float-left"  style="margin-right:10%">Where From</label>
                <select name="source" id="source" class="form-control form-control-sm form-select col-md-6">
                    <option value=" ">Select</option>
                    @foreach($reqInfos as $reqInfo)
                    <option value="{{$reqInfo -> district_councilId}}">{{$reqInfo -> districtName}}</option>
                    @endforeach
                </select>
                @error('source')
                      <strong><span style="color: red; font-size: 80%;">{{$message}}</span></strong><br>
                 @enderror 
            </div>
            <div class="col">
                <label for="" class="float-left" style="margin-right:10%">Where To</label>
                <select name="destination" id="" class="form-control form-control-sm form-select col-md-6 ">
                    <option value="  ">Select </option>
                    @foreach($reqInfos as $reqInfo)
                    <option value="{{$reqInfo -> district_councilId}}">{{$reqInfo -> districtName}}</option>
                    @endforeach
                </select>
                @error('destination')
                      <strong><span style="color: red; font-size: 80%;">{{$message}}</span></strong><br>
                 @enderror 
            </div>
        </div><br>

            

        <span class="text-center">Subject</span>
            <div class="row text-center">
                <textarea class="form-control" name="subject" id="exampleFormControlTextarea1" rows="3"></textarea>
                @error('subject')
                      <strong><span style="color: red; font-size: 80%;">{{$message}}</span></strong><br>
                 @enderror 
            </div><br>
            <div class="row text-center">
                <div class="col-md">
                    <label for="" class="float-left"  style="margin-right:10%">Start Date</label>
                    <input type="date" id="start" name="startDate" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>"  class="form-control col-md-4" required>
                    @error('startDate')
                      <strong><span style="color: red; font-size: 80%;">{{$message}}</span></strong><br>
                    @enderror 
                 </div>

                 <div class="col-md-5 ">
                    <label for="" class="float-left"  style="margin-right:10%">End Date</label>
                    <input type="date" id="end" name="endDate"  min="<?php echo date('Y-m-d'); ?>"  class="form-control col-md-6">
                    @error('endDate')
                      <strong><span style="color: red; font-size: 80%;">{{$message}}</span></strong><br>
                    @enderror 
                 </div>
            </div><br>
                <div class="form-button text-center">
                    <button type="submit" class="btn btn-primary col-md-2" style="background-color:#013c5c; border-radius:20px;" >Make Request</button>
          		</div>   
    </div>
    </form> 
</div>
@endsection
