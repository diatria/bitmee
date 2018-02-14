@extends('layout.logister')
@section('content')
<div class="login-cover row no-gutters">
	<div class="box">
		<div class="card bitnesia login">
			<div class="card-body">
				<h4 class="card-title">Daftar Akun</h4>
				<form>
				  <div class="form-group">
				    <label for="iemail">Alamat Email</label>
				    <input type="email" class="form-control" id="iemail" aria-describedby="emailHelp" placeholder="example@domain.com">
				  </div>
				  <div class="form-group">
				    <label for="inama">Nama</label>
				    <input type="text" class="form-control" id="inama" placeholder="Nama">
				  </div>
				  <div class="form-group">
				    <label for="itelp">No. Telepon</label>
				    <input type="number" class="form-control" id="itelp" placeholder="No. Telepon">
				  </div>
				  <div class="form-group">
				    <label for="ipassword">Password</label>
				    <input type="password" class="form-control" id="ipassword" placeholder="Password">
				  </div>
				  <button type="submit" class="btn-nesia btn-block">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection