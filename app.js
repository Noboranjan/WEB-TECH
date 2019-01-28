//Declaration
var express= require('express');
var app=express();

const request = require('request');
const cheerio = require('cheerio');


request('https://en.prothomalo.com/', (error, response, html) => {
  if (!error && response.statusCode == 200) {
   const $ = cheerio.load(html);
      const siteHeading = $('.info').length;
      console.log(siteHeading);
    
      //const output=siteHeading.find

  }
});

var port=80;
//Configuration
app.set('view engine','ejs');


//Middlewares
app.get('/',function(req,res){
   res.send('Hello world!!'); 
});

//Routes


//Server-Startup
app.listen(port, function(){
   console.log('Server Started....') 
});


