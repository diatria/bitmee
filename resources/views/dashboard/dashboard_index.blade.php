@extends('layout.dashboard')
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-8">
			<div class="card bitmee db-chart">
				<canvas id="myChart"></canvas>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card bitmee db-card-small-A01">
				<table class="db-table-small-icon">
					<tr>
						<td rowspan="2"><i class="ion-social-usd"></i></td>
						<td><div class="title">Saldo</div></td>
					</tr>
					<tr>
						<td><h4>Rp. 1,000,000</h4></td>
					</tr>
				</table>
			</div>
			<div class="card bitmee db-card-small-A01">
				<table class="db-table-small-icon">
					<tr>
						<td rowspan="2"><i class="ion-social-usd"></i></td>
						<td><div class="title">Saldo Investasi</div></td>
					</tr>
					<tr>
						<td><h4>Rp. 1,000,000</h4></td>
					</tr>
				</table>
			</div>
			<div class="card bitmee db-card-small-A01">
				<table class="db-table-small-icon">
					<tr>
						<td rowspan="2"><i class="ion-social-usd"></i></td>
						<td><div class="title">Profit Sharing</div></td>
					</tr>
					<tr>
						<td><h4>Rp. 1,000,000</h4></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="row sparator">
		<div class="col-md-6">
			<div class="card bitmee form-investasi">
				<div class="title">Investasi</div>
				<table class="table-investasi">
					<tr>
						<td>Jumlah (IDR)</td>
						<td><input type="text" class="form-control"></td>
					</tr>
					<tr>
						<td>Durasi</td>
						<td>
							<select name="" id="" class="form-control">
								<option value="">1 Minggu</option>
								<option value="">1 Bulan</option>
								<option value="">3 Bulan</option>
								<option value="">6 Bulan</option>
								<option value="">1 Tahun</option>
							</select>
						</td>
					</tr>
				</table>
				<span class="note">
					Dengan ini saya mengakad-kan uang saya untuk dipakai jual beli bitcoin dengan sistem bagi hasil berpersentase 60% untuk pemodal dan 40% untuk Bitmee.
				</span>
				<button class="btn-nesia">Lanjutkan</button>
			</div>
		</div>
	</div>
</div>
@endsection