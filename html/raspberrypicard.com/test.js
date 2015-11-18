var sys = require('sys')
var exec = require('child_process').exec;
var child;

var http = require('http');

const PORT = 8080;

function handleRequest(request, response)
{
	response.end('sponsored by mountain dew' + request.url);
}

var server = http.createServer(handleRequest);

server.listen(PORT, function()
{
	console.log("Server listening on: ");

	child = exec("./wiringPi/examples/blink", function (error, stdout, stderr) 
	{
		sys.print('stdout: ' + stdout);
		sys.print('stderr: ' + stderr);
		if (error != null)
		{
			console.log('exec error: ' + error);
		}
	});
});

// executes `pwd`
//child = exec("./wiringPi/examples/blink", function (error, stdout, stderr) {
//  sys.print('stdout: ' + stdout);
//  sys.print('stderr: ' + stderr);
//  if (error !== null) {
//    console.log('exec error: ' + error);
//  }
//});
