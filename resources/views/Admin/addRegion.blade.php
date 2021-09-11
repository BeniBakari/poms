@include('layouts.web_header')

<form method="POST" action="/addRegion">
        @csrf
        <div>
				<label for="regionName">Region Name</label><input type='text' name='regionName' required ><br>
				@error("regionName")
					<div>
						<span><strong>{{_errorRegionName}}</strong></span>
					</div>
				@enderror
                <input type="submit" value="add region">
		</div>
</form