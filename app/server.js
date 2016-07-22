var express = require('express');
var bodyParser = require('body-parser');
var app = express();

// template engine
var nunjucks = require('nunjucks');


// Define where the public files are, in this example ./public
app.use(express.static('assets'));


// parse application/x-www-form-urlencoded
app.use(bodyParser.urlencoded({ extended: false }))

// parse application/json
app.use(bodyParser.json())
app.listen( process.env.PORT || 3000);

//GET data from wordpress
var data = require('./data')
//console.log(data);


// define rendering engine
nunjucks.configure(['/pages','pages'], {
  autoescape: true,
  express: app
});


app.get('/', function (req, res) {
    data.getWPPages(function(results){
      res.render('home.html',{
      posts : results.pages
      })
      //console.log(results);
      console.log(results.pages[0])
    })
});

app.get('/artdirection', function (req, res) {
    data.getWPPosts(function(results){
      res.render('home.html',{
      posts : results.posts
      })
    })
});
