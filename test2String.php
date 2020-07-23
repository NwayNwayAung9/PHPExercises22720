<!DOCTYPE html>
<html>
<body>
<h5>Remove the character in a given position of a given string.
 The given position will be in the range 0..string length -1 inclusive</h5>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter String: <input type="text" name="Fname"><br>

  Enter Position: <input type="text" name="fpos"><br>
  <input type="submit" value="Submit">
</form>

<?php
echo "<h3>Your Result</h3>";
$str= $_POST ["Fname"];
$num=$_POST ["fpos"];
echo "Old String";
echo "<br>";
echo "$str";
echo "<br>";
echo "New String";
echo "<br>";
echo substr($str,0,$num).substr($str,$num+1,strlen($str)-$num);



 ?>
</body>
</html>