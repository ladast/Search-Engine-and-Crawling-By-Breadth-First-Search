<?php
	$user = new ControllUser();
	if (!$user->get_session())
	{
	   header("location:logout.php");
	}
	else
	{
		$about = new ControllAbout();
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$id			= $_POST['id'];
			$judul		= $_POST['judul'];
			$isi_about	= $_POST['isi_about'];
			$url		= $_POST['url'];
			
			$about->setAbout($id,$judul,$isi_about,$url);
			$update = $about->updateAbout();
			 if ($update) 
			{
				echo "<fieldset>";
				echo "<center><font color=green> Sukses Update Data </font><br>";
				echo "<input type=\"button\" value=\"Kembali\" class=button onClick=\"self.history.back();\"><center>";
				echo "</fieldset><br/>";      
			} 
			else
			{	
				echo "<fieldset>";
				echo "<center><font color=red>[Error] Gagal Update Data</font><br>";
				echo "<input type=\"button\" value=\"Kembali\" class=button onClick=\"self.history.back();\"><center>";
				echo "</fieldset><br/>";        
			}
		}
		else
		{
			$data_about = $about->getAbout();
			foreach ($data_about as $value)
			{
				extract ($value);			
			}
		}
?>
<ul id="breadcrumb">
    <li><a href="#" title="Home"><img src="images/home.png" alt="Home" class="home" /></a></li>
    <li>Data Tentang Kami</li>
</ul>
<form  method="POST" action="" enctype="multipart/form-data">
<input type="hidden" name="id" value="1"/>
<table align="center">
	<tr>
		<td valign="top">Judul</td>
		<td valign="top">:</td>
		<td valign="top"><input type="text" value="<?php echo "$judul"; ?>" name="judul" size="60"></td>
	</tr>			
	<tr>
		<td valign="top">Tentang kami</td>
		<td valign="top">:</td>
		<td><textarea name="isi_about" style="width: 500px; height: 200px;"><?php echo "$isi_about"; ?>" </textarea></td>
	</tr>
	<tr>
		<td valign="top">URL</td>
		<td valign="top">:</td>
		<td valign="top"><input type="text" value="<?php echo "$url"; ?>" name="url" size="60"></td>
	</tr>
	<tr>
		<td colspan="3" align="center"><input type="submit" value="Ubah" class="button">&nbsp;<input type="button" value="Kembali" onClick="self.history.back();" class="button"></td>
	</tr>
</table>
</form>
<?php
	}
?>