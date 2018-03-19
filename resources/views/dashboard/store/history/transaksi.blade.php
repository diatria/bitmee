@extends('layout.dashboard')
@section('content')
<div class="content-nopadding">
	<div class="store-content">
		<div class="row">
			<div class="col-md-6">
				<div class="card bitmee">
					<div class="title">
						Riwayat deposit voucher
					</div>
					<div class="content mt-3">
						<table class="table bitmee table-striped">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First</th>
									<th scope="col">Last</th>
									<th scope="col">Handle</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card bitmee">
					<div class="title">
						Riwayat pembelian voucher
					</div>
					<div class="content mt-3">
						<table class="table bitmee table-striped">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First</th>
									<th scope="col">Last</th>
									<th scope="col">Handle</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
@section('footer')
<script src="{{url('js/bitmee/bitmee.js')}}"></script>
<script>
	$(document).ready(function(){
		$('#kebijakan-deposit-button').click(function(){
			$('#myTab #kebijakan-deposit-tab').tab('show')
		});
		$('#saldo-deposit-button').click(function(){
			$('#myTab #saldo-deposit-tab').tab('show')
		});
		$('#pembayaran-voucher-button').click(function(){
			$('#voucher-tab #pembayaran-voucher-tab').tab('show');
		});
		$('#invoice-voucher-button').click(function(){
			$('#voucher-tab #invoice-voucher-tab').tab('show');
		});
	});
</script>
@endsection