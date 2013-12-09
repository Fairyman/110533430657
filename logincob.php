<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<style type="text/css">
#faiz {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-style: oblique;
	text-decoration: blink;
	background-color: #9CF;
	list-style-type: square;
}
#faiz {
	font-style: oblique;
	text-decoration: blink;
	background-color: #A5E4E3;
	margin: auto;
	height: 6px;
	width: 4px;
}
#faiz {
	background-color: #8BE2E0;
	font-style: oblique;
	font-family: "MS Serif", "New York", serif;
	color: #06F;
	border: thin solid #00F;
	position: relative;
	height: 6px;
	width: 5px;
}
#sa {
	font-family: "Comic Sans MS", cursive;
	font-size: 18px;
	font-style: oblique;
	color: #09F;
	background-color: #C4FFFF;
	height: 10px;
	width: 10px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #09F;
	border-right-color: #09F;
	border-bottom-color: #09F;
	border-left-color: #09F;
	list-style-type: square;
	position: fixed;
}
#apDiv1 {
	position: absolute;
	left: 478px;
	top: 86px;
	width: 334px;
	z-index: 1;
	background-color: #D2FFFF;
	border: 7px solid #88C4FF;
	visibility: visible;
	right: auto;
	bottom: auto;
	margin: 2px;
	padding: 20px;
	font-size: 36px;
	font-style: oblique;
	font-weight: bold;
	font-family: Verdana, Geneva, sans-serif;
	color: #06F;
	text-align: left;
	height: 288px;
}
#as {
	font-family: "Comic Sans MS", cursive;
	background-color: #0CF;
	height: 15px;
	width: 15px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #0FF;
	border-right-color: #0FF;
	border-bottom-color: #0FF;
	border-left-color: #0FF;
	position: fixed;
}
#apDiv2 {
	position: absolute;
	left: 552px;
	top: 204px;
	width: 233px;
	height: 184px;
	z-index: 2;
	color: #09F;
	background-color: #D2FFFF;
	font-size: 18px;
}
</style>
<script>
function cek(a) {
al = /^[A-Za-z]{1,}$/; //Cek validitas harus huruf
return al.test(a);
}
function val(){
var x=document.forms["myForm"]["nama"].value;
var y=document.forms["myForm"]["pass"].value;
if (x==null || x=="" && y==null || y=="") //cek tidak boleh kosong
  {
  alert("Username atau Password Belum diinsi");
  myForm.nama.focus();
  return false;
  }
if (!cek(x) || !cek(y)){ //pemanggilan fungsi cek
	alert ('Username Dan Password harus dalam huruf..!!');
	return false;
}}
</script>
</head>
<body bgcolor="#A0DBFA">
<?PHP
function va(){
    if($_POST){  
        $nama=$_POST['nama'];
		$pass=$_POST['pass'];
		$error = array();  
        if(empty($nama)){  
      $error['nama'] = 'Username tidak boleh kosong';
	  echo (val());  
        }
		if(empty($pass)){  
      $error['pass'] = 'Password tidak boleh kosong'; 
	  echo (val()); 
        }
		if(empty($error)){  
            //prosess data  
			echo (val());
        } 
	}
	echo (val());
	return false;}
?>
<div id="apDiv1" align="left">
    <label>Login</label>
  <hr align="center" width="300" size="5" color="#00CCFF">
  </div>
<div id="apDiv2" align="left">
   <form name="myForm" method="POST" action="" onSubmit="return val()">
    <label>Username :</label>
    <br>
    <input type="text" name="nama" id="nama" width="200" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '';?>" />  
    <div style="color:red"><?php echo isset($error['nama']) ? $error['nama'] : '';?></div>
      <br>
    <label>Password :</label>
    <br>
    <input type="password" name="pass" id="pass" width="200">
    <br>
    <input type="submit" name="Login" value="Login">
    <input type="reset" name="Reset" value="Reset">
  </form>
</div>
</body>
</html>
