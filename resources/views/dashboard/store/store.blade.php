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
				<div class="row row-mgt-15">
					<div class="col-md-12">
						<div class="card bitnesia">
							
							<ul class="nav nav-tabs d-none" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="form-deposit-tab" data-toggle="tab" href="#form-deposit" role="tab" aria-controls="form-deposit" aria-selected="true">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="kebijakan-deposit-tab" data-toggle="tab" href="#kebijakan-deposit" role="tab" aria-controls="kebijakan-deposit" aria-selected="false">Profile</a>
								</li>
							</ul>

							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="form-deposit" role="tabpanel" aria-labelledby="form-deposit-tab">
									<div class="title">
										Deposit Voucher
									</div>
									<form action="">
										<div class="form-group">
											<label for="nominal">Masukan kode voucher</label>
											<input type="email" class="form-control" id="nominal" aria-describedby="nominal" placeholder="Kode voucher">
										</div>
										<div class="form-group">
											<button type="button" class="btn btn-nesia btn-block" id="kebijakan-deposit-button">Lanjutkan</button>
										</div>
									</form>
								</div>
								<div class="tab-pane fade" id="kebijakan-deposit" role="tabpanel" aria-labelledby="kebijakan-deposit-tab">
									<div class="title">
										Persyaratan Deposit
									</div>
									<p class="lead">
										Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
									</p>
									<button type="button" class="btn btn-nesia btn-block" id="kebijakan-deposit-button">Proses</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 dp-grid">
				<div class="card bitnesia">
					<div class="title">
						Beli Voucher Instan
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
<script>
	$(document).ready(function(){
		$('#kebijakan-deposit-button').click(function(){
			$('#myTab #kebijakan-deposit-tab').tab('show')
		});
	});
</script>
@endsection