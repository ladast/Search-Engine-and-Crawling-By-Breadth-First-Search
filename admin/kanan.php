<?php
if (!isset($_GET['act']))$_GET['act']='';
switch ($_GET['act'])
{	
	case '' 				: include "welcome.php"; break;
	case 'import_datakonten': include "ViewImportDataKonten.php"; break;
	case 'datakonten'		: include "ViewDataKonten.php"; break;
	case 'edit_datakonten'	: include "ViewEditDataKonten.php"; break;
	case 'hapus_datakonten'	: include "ViewHapusDataKonten.php"; break;
	
	case 'link' 			: include "ViewDataLink.php"; break;
	case 'input_link'		: include "ViewInputLink.php"; break;
	case 'edit_link'		: include "ViewEditLink.php"; break;
	case 'hapus_link'		: include "ViewHapusLink.php"; break;

	case 'user' 			: include "ViewDataUser.php"; break;
	case 'input_user'		: include "ViewInputUser.php"; break;
	case 'edit_user'		: include "ViewEditUser.php"; break;
	case 'hapus_user'		: include "ViewHapusUser.php"; break;
	
	case 'about' 			: include "ViewDataAbout.php"; break;
	case 'update_about'		: include "ViewEditAbout.php"; break;
}

?>