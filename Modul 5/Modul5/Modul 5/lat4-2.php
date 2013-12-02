/**
* Fungsi untuk menampilkan menu administrasi
* @param string root parameter menu
*/
function show_admin_data($root) { ?>
<h2 class="heading">Administrasi Data</h2>
<?php
$sql = 'SELECT nim, nama, alamat FROM ' . MHS;
$res = mysql_query($sql);
if ($res) {
$num = mysql_num_rows($res);
if ($num) {
?>
<div class="tabel">
<div style="padding:5px;">
<a href="<?php echo $root;?>&amp;act=add">Tambah Data</a>
</div>
<table border=1 width=700 cellpadding=4 cellspacing=0>
<tr>
<th>#</th>
<th width=120>NIM</th>
<th width=200>Nama</th>
<th width=200>Alamat</th>
<th>Menu</th>
</tr>
<?php
$i = 1;
while ($row = mysql_fetch_row($res)) {
$bg = (($i % 2) != 0) ? '' : 'even';
$id = $row[0]; ?>
<tr class="<?php echo $bg;?>">
<td width="2%"><?php echo $i;?></td>
<td>
<a href="<?php echo $root;?>&amp;act=view&amp;id=
<?php echo $id;?>"
title="Lihat Data"><?php echo $id;?></a>
</td>
<td><?php echo $row[1];?></td>
<td><?php echo $row[2]?></td>
<td align="center">
| <a href="<?php echo $root;?>&amp;act=edit&amp;id=
<?php echo $id;?>">
Edit</a> |
<!--
Lengkapi kode PHP untuk membuat link hapus data
-->
</td>
</tr>
<?php
$i++;
}
?>
</table>
</div>
<?php
} else {
echo 'Belum ada data,
isi <a href="'.$root.'&amp;act=add">di sini</a>';
}
@mysql_close($res);
}
}