<!DOCTYPE html>
<html>
<head>
    <title>Crawling...</title>   
<style>
	html, body
	{
		height: 100%;
		margin: 0;
		padding: 0;
	}
	
	body
	{
		background: #b3b4b7;
		text-align: center;
	}   
	
	h1
	{
	  font-family: 'Allan', serif;
	  text-shadow: 0 1px 0 rgba(255,255,255,.5);
	  margin: 20px 0;
	}

	/* --------------------------- */
	
	body:before 
	{
	  content: "";
	  position: fixed;
	  top: -10px;
	  left: 0;
	  width: 100%;
	  height: 10px;
	  z-index: 100;
	  -webkit-box-shadow: 0px 0px 10px rgba(0,0,0,.8);
	  -moz-box-shadow: 0px 0px 10px rgba(0,0,0,.8);
	  box-shadow: 0px 0px 10px rgba(0,0,0,.8);			  
	}

	/* --------------------------- */
	
	#box 
	{
	  position: relative;
	  width: 60%;
	  background: #ddd;
	  -moz-border-radius: 4px;
	  border-radius: 4px;
	  padding: 2em 1.5em;
	  color: rgba(0,0,0, .8);
	  text-shadow: 0 1px 0 #fff;
	  line-height: 1.5;
	  margin: 60px auto;
	}


	#box:before, #box:after 
	{
	  z-index: -1; 
	  position: absolute; 
	  content: "";
	  bottom: 15px;
	  left: 10px;
	  width: 50%; 
	  top: 80%;
	  max-width:300px;
	  background: rgba(0, 0, 0, 0.7); 
	  -webkit-box-shadow: 0 15px 10px rgba(0,0,0, 0.7);   
	  -moz-box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
	  box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
	  -webkit-transform: rotate(-3deg);    
	  -moz-transform: rotate(-3deg);   
	  -o-transform: rotate(-3deg);
	  -ms-transform: rotate(-3deg);
	  transform: rotate(-3deg);
	}

	#box:after 
	{
	  -webkit-transform: rotate(3deg);
	  -moz-transform: rotate(3deg);
	  -o-transform: rotate(3deg);
	  -ms-transform: rotate(3deg);
	  transform: rotate(3deg);
	  right: 10px;
	  left: auto;
	}	
</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script>
var auto_refresh = setInterval(
function()
{
$('#load_data').fadeOut('fast').load('ViewCrawler.php').fadeIn("fast");
}, 10000);
</script>

</head>

<body>

<div id="box">
<h1>Crawler Running...</h1>
<div id="load_data">
</div>
</div>


</body>
</html>
