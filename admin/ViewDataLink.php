<?php
	$user = new ControllUser();
	if (!$user->get_session())
	{
	   header("location:logout.php");
	}
	else
	{
		$link		= new ControllLink();
		$data_link 	= $link->getLinks();	
		?>
		<ul id="breadcrumb">
			<li><a href="#" title="Home"><img src="images/home.png" alt="Home" class="home" /></a></li>
			<li>Data Link</li>
		</ul>
		<input type="button" value="Tambah Data Link" onclick="window.location.href='?act=input_link';" class="button" align="left"><br>
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
                    <th><h3>Link</h3></th>
                    <th><h3>Status</h3></th>
                    <th><h3>Crawled</h3></th>
                    <th><h3>Aksi</h3></th>
                </tr>
            </thead>
            <tbody>
		<?php
		$no = 1;
		foreach ($data_link as $value)
		{
			extract ($value);
			if ($status=='Y')
			{
				$status = "<img src='images/y.png' title='Aktif'>";
			}
			else
			{
				$status = "<img src='images/n.png' title='Tidak Aktif'>";
			}
			echo <<<show
			<tr>
				<td width='5%' nowrap>$no</td>
				<td><a href='$link' target='_blank'>$link</a></td>
				<td width='5%' nowrap align=center>$status</td>
				<td width='5%' nowrap align=center>$crawled</td>
				<td width='5%' nowrap><a href=?act=edit_link&id=$id_link><img src='images/edit.png'></a>&nbsp;<a href=?act=hapus_link&id=$id_link onClick="return confirm ('Apakah Anda Yakin mau menghapus $link?')"><img src='images/del.png'></a></td>
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