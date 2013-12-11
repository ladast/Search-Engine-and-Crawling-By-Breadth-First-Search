<?php
	$user = new ControllUser();
	if (!$user->get_session())
	{
	   header("location:logout.php");
	}
	else
	{
		$uid 		= $_GET['id'];
		$nama 		= '';		
		$password	= '';
		$username	= '';
		$email		= '';
		$user->setUser($uid,$username,$password,$nama,$email);
		$hapus = $user->deleteUser();
		if ($hapus)
		{
			echo "<fieldset>";
			echo "<center><font color=green>Data berhasil dihapus!</font><br>";
			echo "<input type=\"button\" value=\"Kembali\" class=button onClick=\"self.history.back();\"></center>";
			echo "</fieldset><br/>";    
		}		
	}
?>