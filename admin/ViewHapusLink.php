<?php
	$user = new ControllUser();
	if (!$user->get_session())
	{
	   header("location:logout.php");
	}
	else
	{
		$id 		= $_GET['id'];
		$link		= '';
		$status 	= '';
		$crawled 	= '';
	
		$kelas_link	= new ControllLink();
		$kelas_link->setLink($id,$link,$status,$crawled);
		$hapus = $kelas_link->deleteLink();
		if ($hapus)
		{
			echo "<fieldset>";
			echo "<center><font color=green>Data berhasil dihapus!</font><br>";
			echo "<input type=\"button\" value=\"Kembali\" class=button onClick=\"self.history.back();\"></center>";
			echo "</fieldset><br/>";    
		}
		
	}
?>