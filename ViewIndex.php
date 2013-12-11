<?php
	include_once 'DB_Koneksi.php';
	include_once 'controller/ControllUser.php';
	include_once 'entitas/EntUser.php';
	include_once 'controller/ControllKonten.php';
	include_once 'entitas/EntKonten.php';
	include_once 'controller/ControllLink.php';
	include_once 'entitas/EntLink.php';
	include_once 'controller/ControllAbout.php';
	include_once 'entitas/EntAbout.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>.:: Pencarian Berbasis Web</title>
  <link href="css/styles.css"  rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  
  <script src="jquery.js"></script>
<!--
  <script type='text/javascript' src='jquery.autocomplete.js'></script>
  <link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />
-->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
    <![endif]-->
  <script LANGUAGE="JavaScript">
	function display(id) {
		if(document.getElementById(id).style.display=="none")
		  document.getElementById(id).style.display="block";
		else
		  document.getElementById(id).style.display="none";
	}
	function hide(id){
		 document.getElementById(id).style.display="none";
	}
  </script>
  <style type="text/css">  
	a.green {font-size:normal;}
	a.green:link    {color: green;}
	a.green:visited {color: Purple;}
  </style>
  <style>
	.radio-toolbar input[type="radio"] {
		display:none;
	}

	.radio-toolbar label {
		display:inline-block;
		background-color:#ddd;
		padding:4px 11px;
		font-family:Arial;
		font-size:16px;
	}

	.radio-toolbar input[type="radio"]:checked + label {
		background-color:#bbb;
	}
	</style>
	<script type="text/javascript">
	$().ready(function() {
		$("#query").autocomplete("get_keyword_list.php", {
			width: 260,
			//matchContains: true,
			mustMatch: true,
			//minChars: 0,
			//multiple: true,
			//highlight: false,
			//multipleSeparator: ",",
			selectFirst: false
		});
	});
	</script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" id="home">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.php#home">Web Search</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#home">Home</a></li>
              <li><a href="#about">Tentang kami</a></li>
              <li><a href="#add">Tambah URL</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container">
	<div align='center'>
	<div id="#">
		<table>
			<tr>
				<td rowspan=2><img src='images/logo.png' /></td>
				<td align='center'><font size='7' color='black'>Web Search</font></td>
			</tr>
			<tr>
				<td align='center'><font size='6' >Data Berita Indonesia</font></td>
			</tr>
		</table>
	</div>
	<br/>
	<div>
		<form action='Cari.php' autocomplete="on">
			<div><input type='text' name='query' id='query'  size=90 style='height: 30px; width: 500px; font-size:16'/></div>
			<div>
			Contoh: 
				<a href='Cari.php?query=Susilo Bambang Yudhoyono'>Susilo Bambang Yudhoyono</a>, 
				<a href='Cari.php?query=Jusuf Kalla'>Jusuf Kalla</a>, dll.
			</div>
			<div>
	</div>
	<br/>
			<div><input type='submit' value='Search' style='height: 30px; width: 100px'/></div>
		</form>
	</div>
	</div>
	<br/>
	<br/>
	<div align='center'>
		<hr color='lightskyblue' size='1%'>
		<a href='http://ilkom.unsri.ac.id'>Ilmu Komputer Unsri</a>&nbsp;
		</a>
	</div>
	<br/>
	<br/>
	<br/>
	<div align='center'><font size='2'>Powered By PHP, CSS, HTML, Jquery, dll</font></div>

</div> <!-- /container -->
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<!-- START THE ABOUT -->
<?php
	$about = new ControllAbout();
	$data_about = $about->getAbout();
	foreach ($data_about as $value)
	{
		extract ($value);			
	}
?>
	 <div id="about">
     <div class="featurette">
        <img class="featurette-image pull-right" src="images/semantic.jpg">
        <h2 class="featurette-heading"><?php echo "$judul"; ?>&nbsp;<a href="#home" class="arrow-top"><img src="img/arrow-top.png" width="26px" height="26px" alt="Nav Home"></a></h2>
        <p class="lead"><?php echo "$isi_about"; ?></p>
      </div>
      <hr class="featurette-divider">
	  </div>
	<!-- START THE Tambah URL -->
	  
	  <div class="row-fluid" id="add">

		<h2 class="page-title" id="scroll_up">
			Tambah URL
			<a href="#home" class="arrow-top">
			<img src="img/arrow-top.png" width="26px" height="26px" alt="Nav Home">
			</a>
		</h2>

		<div class="span7">
			
	<p>Masukan URL</p>
      <form id="inputlinkcrawler-form" name="inputlinkcrawler-form" method="post" class="form-inline" action="addurlcrawler.php">
        <div class="input-append">
        <input type="text" id="url" name="url" placeholder="http://">
        <button type="submit" class="btn" id="psubmit" name="psubmit">Tambah URL</button>
        </div>
      </form>
	  </div>


    <div class="span4">
      <img src="images/web_crawler.jpg"/>
    </div>
	</div>
	  
      <!-- /END THE ABOUT -->
    <script src="js/dimensions.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
</body>
</html>
