<html>
<head>
	<meta charset="UTF-8">
	<title>Bitmee</title>
	<link rel="stylesheet" href="{{url('css/bitmee.css')}}">
	<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="header">
		<div class="navigation position-fixed">
			<div class="logo">
				<img src="{{asset('assets/image/bitcoin.png')}}" alt="">
			</div>
			<div class="menu">
				<div class="item">1 BTC = 280.000.000</div>
			</div>
		</div>
		@yield('content')
	</div>
</body>
<script>
	navigator.serviceWorker.register('/js/sw.js');
	Notification.requestPermission(function(result) {
	  if (result === 'granted') {
	    navigator.serviceWorker.ready.then(function(registration) {
	      alert('Notification with ServiceWorker');
	    });
	  }
	});
</script>
</html>