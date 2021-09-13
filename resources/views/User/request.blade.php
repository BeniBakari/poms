<style>
    .set-top{
        top:2%;
    }
</style>
@include('layouts.web_header')
@include('layouts.header')

<div style="float:left; width:300px;">
    @include('layouts.navbar')
</div>

<div class="card col-md-9 offset-3">
    <div class="card-header">
        <h3 class="text-center">Make Request</h3>
    </div>
    <div class="card-body ">
        <div class="row">
            <div class="col">
                <label for="" class="float-left"  style="margin-right:10%">Where From</label>
                <select name="" id="" class="form-control col-md-6">
                    <option>Select</option>
                    <option value="1">Type 1</option>
                    <option value="2">Type 2</option>
                    <option value="3">Type 3</option>
                </select>
            </div>
            <div class="col">
                <label for="" class="float-left" style="margin-right:10%">WhereTo</label>
                <select name="" id="" class="form-control col-md-6 ">
                    <option>Select </option>
                    <option value="1">Type 1</option>
                    <option value="2">Type 2</option>
                    <option value="3">Type 3</option>
                </select>
            </div>
        </div><br>

            <div class="row  set-top">
               <div class="col offset-3  ">
                    <label for="" class="float-left"  style="margin-right:10%">Permission Type</label>
                    <select name="" id="" class="form-control col-md-4">
                        <option>Select</option>
                        <option value="1">Type 1</option>
                        <option value="2">Type 2</option>
                        <option value="3">Type 3</option>
                    </select>
                 </div>
            </div><br>

        <span class="text-center">Description</span>
            <div class="row">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div><br>
            <div class="row">
                <div class="col ">
                    <label for="" class="float-left"  style="margin-right:10%">Start Date</label>
                    <input type="date" id="start" name="startDate" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>"  class="form-control col-md-4">
                 </div>

                 <div class="col ">
                    <label for="" class="float-left"  style="margin-right:10%">End Date</label>
                    <input type="date" id="start" name="startDate" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>"  class="form-control col-md-4">
                 </div>
            </div><br>
            
        

        <div class="form-button text-center">
		  	<button type="submit" class="btn btn-primary rounded-pill w150">Make Request</button>
		  </div>
        
    </div>
    
</div>

@include('layouts.footer')