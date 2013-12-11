<ul id="breadcrumb">
        <li><a href="#" title="Home"><img src="images/home.png" alt="Home" class="home" /></a></li>
        <li>Beranda</li>
</ul>
<?php
	$tanggal	= date('Y-M-D');
	$jam 		= date("H:i:s");
	$username 	= $user->get_username() ;
	echo "<fieldset>
	<legend><b>Informasi mengenai anda</b></legend>";
	echo "Username anda adalah <font color=red>$username</font> tercatat anda login pada <font color=red>$tanggal</font> jam <font color=red>$jam</font> WIB<br>";
	echo "Menggunakan IP Address : <font color=red> $_SERVER[REMOTE_ADDR]</font><br>"; 
	echo "Menggunakan browser : <font color=red>$_SERVER[HTTP_USER_AGENT]</font><br>";
	echo "</fieldset>";
?>