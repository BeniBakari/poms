@include('layouts.web_header')

<form method="POST" action="/register">
			@csrf
			<div>
				<label for="firstName">First Name</label><input type='text' name='firstName' required ><br>
			</div>

			<div>
				<label for="User Id">User Id</label><input type='text' name='userId' required ><br>
			</div>

			<div>
				<label for="lastName">Last Name</label><input type='text' name='lastName' required ><br>
				
			</div>
			<div>
				<label for="Email">Email</label><input type='email' name='email' required ><br>
				
			</div>

			<div>
				<label for="role">District</label><input type='number' value=1 name='district_councilId' readonly="true" ><br>
			</div>
			<div>
				<label for="role">Division</label><input type='number' value=1 name='divisionId' readonly="true" ><br>
			</div>
			<div>
				<label for="password">password</label><input type='password' name='password' required ><br>
				
			</div>
			
			<div>
				Male <input type="radio" name="gender" value="Male" required>
			Female <input type="radio" name="gender" value="Female" required>
			</div>

			<div>
				<input type="submit" value="add">
			</div>

	</form>