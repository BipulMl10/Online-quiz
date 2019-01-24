var express = require("express");
var app = express();

var path=require("path");

const port = 3000;

//app.use(express.static(path.join(__dirname,"public")));

//app.get("/",function(req,res){
//res.status(200).sendFile(path.join(__dirname,"public","login.html"));
//});
app.use(express.static('./'));

app.get('/',function(req,res){
    res.status(200).sendFile(path.join(__dirname,"./","login.html"));
  });


app.get('/', function(request, response)
{
    response.send('Username: ' + request.query['uname']);
    response.send('Password: ' + request.query['psw']);
    readTasks(function(tasks) 
    {
        response.writeHead(200, {'Content-type': 'application/json'});
        response.write(JSON.stringify(tasks));
        response.end();
    });
});


app.post('/',function(re,rs)
{
   readJSONBody(re, function(task) 
   {
      createTask(task.text, function() 
      {
        // must wait until task is stored before returning response
        rs.end();
      });
    });
})


function readTasks(callback) 
{
  fs.readFile('tasks', function(error, contents) 
  {
    if (error) 
	{
      throw error;
    }

    var tasks;
    if (contents.length === 0) 
	{
      tasks = [];
    } 
	else 
	{
      tasks = JSON.parse(contents);
    }
    callback(tasks);
  });
}

function createTask(text, callback) 
{
  readTasks(function(tasks) 
  {
    tasks.push({ text: text });
    writeTasks(tasks, callback);
  });
}

function readJSONBody(request, callback) 
{
  var body = '';
  request.on('data', function(chunk) {
					 body += chunk;
			});

  request.on('end', function() {
					var data = JSON.parse(body);
					callback(data);
		   });
}

function writeTasks(tasks, callback) 
{
  var tasksJSON = JSON.stringify(tasks);
  fs.writeFile('tasks', tasksJSON, function(error) {
  if (error) 
  {
    throw error;
  }

    callback();
  });
}

app.listen(port,function(){
    console.log("listening at 3000");
});