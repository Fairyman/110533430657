<html>
<head>
<title>Menciptakan Database</title>
</head>
<body>
<?php
require_once './koneksi.php';

$db = 'myweb';

$res = mysql query('CREATE DATABASE'. $db);
if ($res){
	echo 'Database' . $db . 'Created';
	mysql close($res);
} else {
	echo mysql error();
}
?>

</body>
</html>