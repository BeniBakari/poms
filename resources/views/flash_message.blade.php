@if($message = Session::get('success'))
<div class="justify-content-center fixed-top row rows" id="message">
        <div class="alert alert-success alert-block col-md-4" >
            <button class="close" data-dismiss = "alert">×</button> 
            <div class="text-center">
                <strong>{{$message}}</strong><br>
                <img src="{{asset('/images/success.png')}}" alt="sucess" width="50" height="50">
            </div>
        </div>
</div> 
@endif

@if($message = Session::get('error'))
<div class="justify-content-center fixed-top row rows" id="message">
        <div class="alert alert-success alert-block col-md-4" >
            <button class="close" data-dismiss = "alert">×</button> 
            <div class="text-center">
                <strong>{{$message}}</strong><br>
                <img src="{{asset('/images/error.png')}}" alt="sucess" width="50" height="50">
            </div>
        </div>
</div> 
@endif

@if($message = Session::get('information'))
<div class="justify-content-center fixed-top row rows" id="message">
        <div class="alert alert-success alert-block col-md-4" >
            <button class="close" data-dismiss = "alert">×</button> 
            <div class="text-center">
                <strong>{{$message}}</strong><br>
                <img src="{{asset('/images/information.png')}}" alt="sucess" width="50" height="50" color="blue">
            </div>
        </div>
</div> 
@endif