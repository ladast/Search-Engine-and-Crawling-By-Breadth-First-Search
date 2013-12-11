<?php
	$user = new ControllUser();
	if (!$user->get_session())
	{
	   header("location:logout.php");
	}
	else
	{
		$konten = new ControllKonten();
		$data_konten = $konten->getKontens();	
		//dapatkan data konten
		?>
		<ul id="breadcrumb">
			<li><a href="#" title="Home"><img src="images/home.png" alt="Home" class="home" /></a></li>
			<li>Data Konten/Text</li>
		</ul>
		<input type="button" value="Tambah Data Konten/Text" onclick="window.location.href='?act=import_datakonten';" class="button" align="left"><br>
		<div id="tablewrapper">
		<div id="tableheader">
        	<div class="search">
                <select id="columns" onchange="sorter.search('query')"></select>
                <input type="text" id="query" onkeyup="sorter.search('query')" />
            </div>
            <span class="details">
				<div>Baris <span id="startrecord"></span>-<span id="endrecord"></span> dari <span id="totalrecords"></span></div>
        		<div><a href="javascript:sorter.reset()">reset</a></div>
        	</span>
        </div>
        <table cellpadding="0" cellspacing="0" border="0" id="table" class="tinytable">
            <thead>
                <tr>
                    <th class="nosort"><h3>No.</h3></th>
                    <th><h3>Judul</h3></th>
                    <th><h3>Isi</h3></th>
                    <th><h3>File</h3></th>
                    <th><h3>Aksi</h3></th>
                </tr>
            </thead>
            <tbody>
		<?php
		$no = 1;
		foreach ($data_konten as $value)
		{
			extract ($value);
			$isi_konten = htmlentities(strip_tags($isi_konten)); // membuat paragraf pada isi berita dan mengabaikan tag html
			$isi_konten = substr($isi_konten,0, 220); // ambil sebanyak 220 karakter
			$isi_konten = substr($isi_konten,0,strrpos($isi_konten," ")); // potong per spasi kalimat
			echo <<<show
			<tr>
				<td valign=top>$no</td>
				<td valign=top>$judul_konten</td>
				<td valign=top>$isi_konten ...</td>
				<td valign=top><a href=$url_file target=_blank>$url_file</a></td>
				<td width='5%' nowrap  valign=top><a href=?act=edit_datakonten&id=$id_konten><img src='images/edit.png'></a>&nbsp;<a href=?act=hapus_datakonten&id=$id_konten onClick="return confirm ('Apakah Anda Yakin mau menghapus $judul_konten?')"><img src='images/del.png'></a></td>
			</tr>
show;
			$no++;
		}	?>
		
		</tbody>
        </table>
        <div id="tablefooter">
          <div id="tablenav">
            	<div>
                    <img src="images/first.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1,true)" />
                    <img src="images/previous.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1)" />
                    <img src="images/next.gif" width="16" height="16" alt="First Page" onclick="sorter.move(1)" />
                    <img src="images/last.gif" width="16" height="16" alt="Last Page" onclick="sorter.move(1,true)" />
                </div>
                <div>
                	<select id="pagedropdown"></select>
				</div>
                <div>
                	<a href="javascript:sorter.showall()">view all</a>
                </div>
            </div>
			<div id="tablelocation">
            	<div>
                    <select onchange="sorter.size(this.value)">
                    <option value="5">5</option>
                        <option value="10" selected="selected">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span>Entries Per Page</span>
                </div>
                <div class="page">Page <span id="currentpage"></span> of <span id="totalpages"></span></div>
            </div>
        </div>
    </div>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript">
	var sorter = new TINY.table.sorter('sorter','table',{
		headclass:'head',
		ascclass:'asc',
		descclass:'desc',
		evenclass:'evenrow',
		oddclass:'oddrow',
		evenselclass:'evenselected',
		oddselclass:'oddselected',
		paginate:true,
		size:10,
		colddid:'columns',
		currentid:'currentpage',
		totalid:'totalpages',
		startingrecid:'startrecord',
		endingrecid:'endrecord',
		totalrecid:'totalrecords',
		hoverid:'selectedrow',
		pageddid:'pagedropdown',
		navid:'tablenav',
		sortcolumn:0,
		sortdir:0,
		init:true
	});
  </script>
	
<?php
	}
?>