<form method="POST" action="/addDistrict">
@csrf
        <div>
            District Council of <input type = "text" name= "districtName" required>
        </div>
        <div>
             Select region 
             <select name="regionId"> region
                        @foreach($regions as $region)
                        <option value="{{$region->regionId}}" >{{$region->regionName}}</option>
                        @endforeach
            </select>    
        </div>
        <input type="submit" value="add ditrict">
</form>