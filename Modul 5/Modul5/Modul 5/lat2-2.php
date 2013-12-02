<html>
<head>
<title>Menciptakan Tabel</title>
</head>
<body>
<?php
require_once './koneksi.php';

$sql = 'CREATE TABLE mahasiswa (
	nim VARCHAR(12) NOT NULL,
	nama VARCHAR(40) NOT NULL,
	aLamat VARCHAR(100),
	) ENGINE = MyISAM;';

$res = mysql query($sql);
if ($res){
	echo 'Tabel Created';
	mysql close($res);
} else {
	echo mysql error();
}
?>

</body>
</html>