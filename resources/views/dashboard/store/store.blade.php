@extends('layout.dashboard')
@section('content')
<div class="content-nopadding">
{{-- 	<div class="store-header">
		<img src="http://via.placeholder.com/1500x320" class="img-fluid" alt="Responsive image">
		<div class="store-navbar">
			<div class="store-name-info">
				<i class="ion-record online"></i>
				<span class="store-name">Bitnesia Store</span>
				<span class="status online">Online</span>
			</div>
		</div>
	</div> --}}
	<div class="store-content">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6">
						<div class="card bitnesia db-card-small-A01 store-card-small">
							<table class="px-store db-table-small-icon">
								<tr>
									<td rowspan="2" class="table-icon"><i class="ion-android-arrow-dropdown text-red"></i></td>
									<td class="table-title"><div class="title">Penjualan Voucher</div></td>
								</tr>
								<tr>
									<td>
										<h4>1.200.000 IDR</h4>
									</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card bitnesia db-card-small-A01 store-card-small">
							<table class="px-store db-table-small-icon">
								<tr>
									<td rowspan="2" class="table-icon"><i class="ion-android-arrow-dropup text-green"></i></td>
									<td class="table-title"><div class="title">Pembelian Voucher</div></td>
								</tr>
								<tr>
									<td>
										<h4>1.500.000 IDR</h4>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card bitnesia">
					<div class="title">
						Beli Voucher
					</div>
					<form action="">
						<div class="form-group">
							<label for="nominal">Total Voucher</label>
    						<input type="email" class="form-control" id="nominal" aria-describedby="nominal" placeholder="Total Voucher">
 						</div>
 						<div class="form-group">
 							<label for="bank">Pilih metode pembayaran</label>
 							<div class="remover-scrollbar">
 								<div class="store-list-bank">
 									<div class="store-list-bank-scroll">
 										<div class="list icon-mandiri"></div>
 										<div class="list icon-bca"></div>
 										<div class="list icon-btpn"></div>
 										<div class="list icon-jenius"></div>
 										<div class="list icon-doku"></div>
 										<div class="list icon-gopay"></div>
 									</div>
 								</div>
 								<div class="nav-right" id="scroll-right" data-scroll="75"><i class="ion-chevron-right"></i></div>
 								<div class="remover"></div>
 								<div class="nav-left" id="scroll-left" data-scroll="75"><i class="ion-chevron-left"></i></div>
 							</div>
 						</div>
 						<div class="form-group">
 							<button type="submit" class="btn btn-nesia btn-block">Lanjutkan</button>
 						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
@section('footer')
<script src="{{url('js/bitnesia/bitnesia.js')}}"></script>
@endsection