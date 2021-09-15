<style>
    .set-top{
        top:2%;
    }
    table td {
        border:1px solid black;
    }
</style>
@include('layouts.web_header')
@include('layouts.header')
<div style=" magin-bottom:20px">
&nbsp&nbsp
<i class="fas fa-bars"></i>
        </div>
        <br>
<div style="float:left; width:300px;">
    @include('layouts.navbar')
</div>
<div class="card col-md-9 offset-3">
    <div class="card-header">
    <div style="float:right"> 
<i class="fas fa-sign-out-alt"></i>
<a href="logout.com">Logout</a>
</div>  
    <h3 class="text-center">My Profile </h3>
    </div>
      
    <table style=" width:100%">
<tr>
    <td>First Name</td>
    <td>Emmanuel</td>
</tr>
<tr>
    <td>Middle Name</td>
    <td>Estory</td>
</tr>
<tr>
    <td>Last Name</td>
    <td>Kapabela</td>
</tr>
<tr>
    <td>Email</td>
    <td>kapabela.e@go.tz</td>
</tr>
<tr>
    <td>Rank</td>
    <td>HRM</td>
</tr>
<tr>
    <td>Division</td>
    <td>DHRAM</td>
</tr>
<tr>
    <td>Phone Number</td>
    <td>0734829822 <div class="form-button text-center" style="float:right;">
    <button type="submit" class="btn btn-primary rounded-pill w150" style="background:#013C5C;">Edit</button>
		  	<button type="submit" class="btn btn-primary rounded-pill w150" style="background:#013C5C;">Save</button>
		  </div></td>
</tr>
    </table>
</div>

@include('layouts.footer')