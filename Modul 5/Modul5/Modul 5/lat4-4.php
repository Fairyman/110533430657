/**
* Fungsi untuk menghasilkan form penambahan/pengubahan
* @param string root parameter menu
* @param integer id nim mahasiswa
*/
function data_editor($root, $id = 0) {
$view = true;
if (isset($_POST['nim']) && $_POST['nim'] ) {
// Jika tidak disertai id, berarti insert baru
if (!$id) {
// Lengkapi Pernyataan PHP SQL untuk INSERT data
$res = mysql_query($sql);
if ($res) { ?>
<script type="text/javascript">
document.location.href="<?php echo $root;?>";
</script>
<?php
} else {
echo 'Gagal menambah data';
}
} else {
// Lengkapi Pernyataan PHP SQL untuk UPDATE data
$res = mysql_query($sql);
if ($res) { ?>
// Lengkapi script untuk redireksi ke root
<?php
} else {
echo 'Gagal memodifikasi';
}
}
}
// Menyiapkan data untuk updating
if ($view) {
if ($id) {
$sql = 'SELECT nim, nama, alamat FROM ' . MHS .
' WHERE nim=' . $id;
$res = mysql_query($sql);
if ($res) {
if (mysql_num_rows($res)) {
$row = mysql_fetch_row($res);
$nim = $row[0];
$nama = $row[1];
$alamat = $row[2];
} else {
show_admin_data();
return;
}
}
} else {
$nim = @$_POST['nim'];
$nama = @$_POST['nama'];
$alamat = @$_POST['alamat'];
}
?>
<h2> <?php echo $id ? 'Edit' : 'Tambah';?> Data</h2>
<form action="" method="post">
<table border=1 cellpadding=4 cellspacing=0>
<tr>
<td width=100>NIM*</td>
<td> <input type="text" name="nim" size=10
value="<?php echo $nim;?>" /> </td>
</tr>
<tr>
<td>Nama</td>
<td> <input type="text" name="nama" size=40
value="<?php echo $nama;?>" /> </td>
</tr>
<tr>
<td>Alamat</td>
<td> <input type="text" name="alamat" size=60
value="<?php echo $alamat;?>" /> </td>
</tr>
<tr>
<td> </td>
<td><input type="submit" value="Submit" />
<input type="button" value="Cancel"
onclick="history.go(-1)" /></td>
</tr>
</table>
</form> <br />
<p>Ket: * Harus diisi</p>
<?php
}
return false;
}