@extends('layout.dashboard')
@section('content')
<div class="content-nopadding">
	<div class="store-header">
		<img src="http://via.placeholder.com/1500x320" class="img-fluid" alt="Responsive image">
		<div class="store-navbar">
			<div class="store-name-info">
				<i class="ion-record online"></i>
				<span class="store-name">Bitmee Store</span>
				<span class="status online">Online</span>
			</div>
		</div>
	</div>
	<div class="store-content">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6">
						<div class="card bitmee db-card-small-A01 store-card-small">
							<table class="db-table-small-icon">
								<tr>
									<td rowspan="2" class="table-icon"><i class="ion-android-star-outline i-yellow"></i></td>
									<td class="table-title"><div class="title">Rating</div></td>
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
						<div class="card bitmee db-card-small-A01 store-card-small">
							<table class="db-table-small-icon">
								<tr>
									<td rowspan="2" class="table-icon"><i class="ion-stats-bars"></i></td>
									<td><div class="title">Jumlah Transaksi</div></td>
								</tr>
								<tr>
									<td><h4>10034 Transaksi</h4></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="row store-margin-default-top">
					<div class="col-md-12">
						<div class="card bitmee">
							<div class="store-comment-header">
								<span>Komentar</span>
							</div>
							<div class="store-comment">
								<div class="store-comment-img">
									<img class="rounded" src="http://via.placeholder.com/48x48" alt="">
								</div>
								<div class="store-comment-name">
									Dimas Adi Satria
								</div>
								<div class="store-comment-text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt reprehenderit repellat est doloribus ullam aliquid quod tempore ipsum quo fuga quaerat, mollitia fugit? Enim esse placeat molestias, nostrum laboriosam ut.
								</div>
							</div>
							<div class="store-comment">
								<div class="store-comment-img">
									<img class="rounded" src="http://via.placeholder.com/48x48" alt="">
								</div>
								<div class="store-comment-name">
									Dimas Adi Satria
								</div>
								<div class="store-comment-text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt reprehenderit repellat est doloribus ullam aliquid quod tempore ipsum quo fuga quaerat, mollitia fugit? Enim esse placeat molestias, nostrum laboriosam ut.
								</div>
							</div>
							<div class="store-comment-add">
								<textarea name="" id="" cols="30" class="form-control" placeholder="Berikan komentar anda disini..."></textarea>
								<button class="btn-nesia btn-block">Lanjutkan</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<div class="card bitmee db-card-small-A01 store-profile">
							<div class="store-icon">
								<img src="http://via.placeholder.com/140x140" alt="" class="rounded mx-auto d-block store-profile-icon">
							</div>
							<div class="store-profile-title">
								Bitmee Store
							</div>
							<div class="store-profile-tag">
								@bitmee
							</div>
							<div class="separator">
								<hr>
							</div>
							<div class="store-profile-information">
								<div class="box-line">
									<div class="icon"><i class="ion-ios-analytics"></i></div>
									<div class="text">
										Bitmee Platinum
									</div>
								</div>
								<div class="box-line">
									<div class="icon icon-red"><i class="ion-ios-heart-outline"></i></div>
									<div class="text">
										<b>1230</b> Pelanggan
									</div>
								</div>
								<div class="box-line">
									<div class="icon icon-green"><i class="ion-card"></i></div>
									<div class="text">
										BCA, Mandiri, Permata, BTPN
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection