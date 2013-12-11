<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<head>
<title>.: Admin Pencarian Cerdas :.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../css/style_login.css" type="text/css" rel="stylesheet">
<script language="javascript">	
function cekLogin()
	{
		var con=true;
		var error="Kesalahan Pengisian : \n";
		var code = 0;
		
		if (document.input_komen.username.value=="" || document.input_komen.username.value==" ")
		{
			error += "Silakan Masukan Username Anda!\n";
			code=1;
			con=false;
		}		
		if (document.input_komen.password.value=="" || document.input_komen.password.value==" ")
		{
			error += "Silakan Masukan Password Anda!\n";
			code=1;
			con=false;
		}
		if (code==1)
		{
			alert (error);
			return con;
		}
	}
</script>
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
</style>
</head>
<body background="../images/bg-body.gif">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="500" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
        
        <tr> 
          <td><img src="../images/login.gif" height="108" width="500"></td>
        </tr>
        <tr> 
          <td> <table border="0" cellpadding="10" cellspacing="0" width="100%">
              <tbody>
                <tr> 
                  <td bgcolor="#FFFFFF" style="border-left: solid 1px #666666; border-right: solid 1px #666666;"> 
                    <table border="0" cellpadding="2" cellspacing="0" width="100%" class="text">
                      <form name="input_komen" method="POST" action="proses_login.php" onSubmit="return cekLogin();">
                        <tbody>
                          <tr> 
                            <td colspan="3" align="center"> <font color="#0000FF">               
                      </td>
                          </tr>
                          <tr> 
                            <td class="title" width="37%" align="right">Username</td>
                            <td class="title" width="2%"><div align="center">:</div></td>
                            <td width="61%" align="left"><input name="username" type="text" class="form" size="20"></td>
                          </tr>
                          <tr> 
                            <td class="title" align="right" >Password&nbsp;</td>
                            <td class="title"><div align="center">:</div></td>
                            <td align="left"><input name="password" type="password" class="form" size="20"></td>
                          </tr>                  
                          <tr> 
                            <td> </td>
                            <td> </td>
                            <td align="left"><input name="Login" class="tombol" value="Login &raquo;" type="submit"> 
                              <input name="Submit2" class="tombol" value="Reset &raquo;" type="reset"></td>
                          </tr>
                        </tbody>
                      </form>
                    </table></td>
                </tr>
              </tbody>
            </table></td>
        </tr>
        <tr> 
          <td height="10"><img src="../images/lgn-footer.gif" width="500" height="10"></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
