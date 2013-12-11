<?php
	session_start();
	include_once '../DB_Koneksi.php';
	include_once '../controller/ControllUser.php';
	include_once '../entitas/EntUser.php';
	include_once '../controller/ControllKonten.php';
	include_once '../entitas/EntKonten.php';
	include_once '../controller/ControllLink.php';
	include_once '../entitas/EntLink.php';
	include_once '../controller/ControllAbout.php';
	include_once '../entitas/EntAbout.php';
	$user = new ControllUser();

	if (!$user->get_session())
	{
	   header("location:index.php");
	}
	else
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:: Administrator Aplikasi Web Cerdas dengan menggunakan web semantik  ::.</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="pu.ico" />
<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
    <![endif]-->

<link href="../css/button.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="ddaccordion.js">
</script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>
<style type="text/css">

.glossymenu{
margin: 5px 0;
padding: 0;
width: 155px; /*width of menu*/
border: 1px solid #9A9A9A;
border-bottom-width: 0;
}

.glossymenu a.menuitem{
background: black url(images/glossyback.gif) repeat-x bottom left;
font: bold 14px "Lucida Grande", "Trebuchet MS", Verdana, Helvetica, sans-serif;
color: white;
display: block;
position: relative; /*To help in the anchoring of the ".statusicon" icon image*/
width: auto;
padding: 4px 0;
padding-left: 10px;
text-decoration: none;
}


.glossymenu a.menuitem:visited, .glossymenu .menuitem:active{
color: white;
}

.glossymenu a.menuitem .statusicon{ /*CSS for icon image that gets dynamically added to headers*/
position: absolute;
top: 5px;
right: 5px;
border: none;
}

.glossymenu a.menuitem:hover{
background-image: url(images/glossyback2.gif);
}

.glossymenu div.submenu{ /*DIV that contains each sub menu*/
background: white;
}

.glossymenu div.submenu ul{ /*UL of each sub menu*/
list-style-type: none;
margin: 0;
padding: 0;
}

.glossymenu div.submenu ul li{
border-bottom: 1px solid blue;
}

.glossymenu div.submenu ul li a{
display: block;
font: normal 13px "Lucida Grande", "Trebuchet MS", Verdana, Helvetica, sans-serif;
color: black;
text-decoration: none;
padding: 2px 0;
padding-left: 10px;
}

.glossymenu div.submenu ul li a:hover{
background: #DFDCCB;
colorz: white;
}


#breadcrumb
{
    font: 11px Arial, Helvetica, sans-serif;
    background-image:url('images/bc_bg.png'); 
    background-repeat:repeat-x;
    height:30px;
    line-height:30px;
    color:#9b9b9b;
    border:solid 1px #cacaca;
    width:100%;
    overflow:hidden;
    margin:0px;
    padding:0px;
}
#breadcrumb li 
{
    list-style-type:none;
    float:left;
    padding-left:10px;
}
#breadcrumb a
{
    height:30px;
    display:block;
    background-image:url('images/bc_separator.png'); 
    background-repeat:no-repeat; 
    background-position:right;
    padding-right: 15px;
    text-decoration: none;
    color:#454545;
}
.home
{
    border:none;
    margin: 8px 0px;
}

#breadcrumb a:hover
{
	color:#35acc5;
}

</style>
</head>

<body>

<div id="wrapper">
	<div id="header"><br />
    <div id="menuutama"><marquee scrolldelay="100" scrollamount="+2">
    .:: Selamat Datang Di Administrator Aplikasi Web Cerdas dengan menggunakan web semantik   ::.
    </marquee></a></div>
	</div>
    <div id="leftcontent"><?php include "kiri.php";?></div>
    <div id="rightcontent"><?php include "kanan.php";?></div>
    <div id="clearer"></div>
    <div id="footer">Copyright 
    &copy; 2013. All Rights Reserved.</div>
</div>
<script type="text/javascript" src="jam.js"></script>
</body>
</html>
<?php
}
?>