<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head> 
  <title>Prefill Data Radio Button</title> 
</head> 
 
<body> 
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST"> 
    Jenis Kelamin 
    <input type="radio" name="sex" value="Pria" checked="
     <?php 
      if ($_POST["sex"] == "Pria"){ 
        echo 'checked="checked"'; 
      } 
      ?> "
     >Pria 
    <input type="radio" name="sex" value="Wanita" checked=    "<?php 
      if ($_POST['sex'] == "Wanita") { 
        echo 'checked="checked"'; 
      } 
      ?>" 
    >Wanita <br /> 
 
    <input type="submit" value="ok" /> 
  </form> 
 
<?php 
if (isset($_POST['sex'])) { 
  echo $_POST['sex']; 
} 
?> 
 
</body> 
</html>