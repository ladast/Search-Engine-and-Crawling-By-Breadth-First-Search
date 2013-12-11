<?php
	$user = new User();
	if (!$user->get_session())
	{
	   header("location:logout.php");
	}
	else
	{
		$judul 		= $_POST['judul'];
		$isi_about 	= $_POST['isi_about'];
		$url	 	= $_POST['url'];
		
		$status_update = $user->update_about($judul,$isi_about,$url);
		if ($status_update)
		{
			header("location:home.php?act=about");
		}
		else
		{
			echo "Error Update";
		}
	}
?>