<?php$user = new ControllUser();if (!$user->get_session()){   header("location:index.php");}if ($_SERVER["REQUEST_METHOD"] == "POST") {	$uid 		= $_POST['id'];	$nama 		= $_POST['nama'];	$username	= $_POST['username'];	$email		= $_POST['email'];	$password	= '';		$user->setUser($uid,$username,$password,$nama,$email);    $update 	= $user->updateUser();    if ($update) 	{		echo "<fieldset>";        echo "<center><font color=green> Sukses Update </font><br>";		echo "<input type=\"button\" value=\"Kembali\" class=button onClick=\"self.history.back();\"><center>";		echo "</fieldset><br/>";          } 	else	{			echo "<fieldset>";        echo "<center><font color=red>[Error] Gagal Update</font><br>";		echo "<input type=\"button\" value=\"Kembali\" class=button onClick=\"self.history.back();\"><center>";		echo "</fieldset><br/>";        	}}?><script language="javascript">	function cekInputUser()	{		var con=true;		var error="Kesalahan Pengisian : \n";		var code = 0;				if (document.input_user.nama.value=="" || document.input_user.nama.value==" ")		{			error += "Silakan Masukan Nama Admin!\n";			code=1;			con=false;		}				if (document.input_user.username.value=="" || document.input_user.username.value==" ")		{			error += "Silakan Masukan Username!\n";			code=1;			con=false;		}				if (document.input_user.password.value=="" || document.input_user.password.value==" ")		{			error += "Silakan Masukan Password!\n";			code=1;			con=false;		}				if (document.input_user.email.value=="" || document.input_user.email.value==" ")		{			error += "Silakan Masukan Email!\n";			code=1;			con=false;		}				if (code==1)		{			alert (error);			return con;		}	}</script><ul id="breadcrumb">        <li><a href="#" title="Home"><img src="images/home.png" alt="Home" class="home" /></a></li>        <li><a href="#" title="Data User">Data User</a></li>        <li>Edit Data User</li>    </ul><?php	//dapatkan data admin	$uid 		= $_GET['id'];	$username	= '';	$password	= '';	$nama		= '';	$email		= '';	$user->setUser($uid,$username,$password,$nama,$email);	$data_user 	= $user->getUser();			foreach ($data_user as $value)	{		extract ($value);				}		?><form name="input_user" method="post" action="" onSubmit="return cekInputUser();"><input type="hidden" name="id" value="<?php echo $uid; ?>"/><table align="center"><tr>	<td>Nama Admin</td>    <td>:</td>    <td><input type="text" size="30" name="nama" value="<?php echo $name; ?>"/></td></tr><tr>	<td>Username</td>    <td>:</td>    <td><input type="text" size="30" name="username" value="<?php echo $username; ?>"/></td></tr><tr>	<td>Email</td>    <td>:</td>    <td><input type="text" size="30" name="email" value="<?php echo $email; ?>"/></td></tr><tr>	<td colspan="3" align="center"><input type="submit" value="Edit" class="button">&nbsp;<input type="button" value="Kembali" class=button onClick="self.history.back();"></td>	</tr></table></form>