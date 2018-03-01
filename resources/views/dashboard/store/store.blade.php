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
							<table class="db-table-small-icon">
								<tr>
									<td rowspan="2" class="table-icon"><i class="ion-android-arrow-dropdown i-red"></i></td>
									<td class="table-title"><div class="title">Penjualan Voucher</div></td>
								</tr>
								<tr>
									<td>
										<div class="store-progress-bar">
											<div class="progress-bar">
											</div>
											<div class="progress-bar-strip">
											</div>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card bitnesia db-card-small-A01 store-card-small">
							<table class="db-table-small-icon">
								<tr>
									<td rowspan="2" class="table-icon"><i class="ion-android-arrow-dropup i-yellow"></i></td>
									<td class="table-title"><div class="title">Pembelian Voucher</div></td>
								</tr>
								<tr>
									<td>
										<div class="store-progress-bar">
											<div class="progress-bar">
											</div>
											<div class="progress-bar-strip">
											</div>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card bitnesia">
					l
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection