<?php
	define("host","localhost");
	define("user","root");
	define("pass","");
	define("db","semantik");
	
	class Koneksi{
			public function __construct(){
				$con=mysql_connect(host,user,pass) or die("Cannot connect to database server!");
				mysql_select_db(db,$con);
			}
	}
	
	require_once("fungsi/fungsi.php");
?>