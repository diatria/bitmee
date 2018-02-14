@extends('layout.logister')
@section('content')
<div class="login-cover row no-gutters">
	<div class="box">
		<div class="card bitnesia login">
			<div class="card-body">
				<h4 class="card-title">Login</h4>
				<form>
				  <div class="form-group">
				    <label for="iemail">Alamat Email</label>
				    <input type="email" class="form-control" id="iemail" aria-describedby="emailHelp" placeholder="example@domain.com">
				  </div>
				  <div class="form-group">
				    <label for="ipassword">Password</label>
				    <input type="password" class="form-control" id="ipassword" placeholder="Password">
				  </div>
				  <div class="form-check">
				    <label class="form-check-label">
				      <input type="checkbox" class="form-check-input">
				      Ingat saya
				    </label>
				  </div>
				  <button type="submit" class="btn-nesia btn-block">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection