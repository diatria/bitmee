<html>
<head>
	<meta charset="UTF-8">
	<title>PushBitcoinData</title>
	<script src="{{url('js/jquery-3.2.1.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script>
	<script type="text/javascript"></script>
</head>
<body>
	<script>
		var socket = io.connect('http://localhost:3000');

		$(document).ready(function(){
			socket.emit('Bitcoin Data', 'ooo');
		});
	</script>
</body>
</html>