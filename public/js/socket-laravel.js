var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var request = require('request');

http.listen(3000, function(){
  console.log('listening on *:3000');
});

io.on('connection', function(socket){
  console.log('a user connected');
});

io.on('connection', function(socket, res){
  socket.on('Bitcoin Data', function(msg){
    io.emit('Bitcoin Data', msg);
  });
});

setInterval(function(){
	request("http://localhost/bitnesia/public/push_bitcoin_data", function(error, response, body) {
		io.emit('Bitcoin Data', body);
	});
}, 2000);