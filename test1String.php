<!DOCTYPE html>
<html>
<body>
<h5>New string with the last char added at the front and back of a given string of length 1 or more</h5>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter String: <input type="text" name="Fname"><br>
  <input type="submit" value="Submit">
</form>

<?php
echo "<h3>Your Result</h3>";
$name= $_POST ["Fname"];
echo "Old String";
echo "<br>";
echo "$name";
echo "<br>";
echo "New String";
echo "<br>";
$s = substr($name, strlen("$name") - 1);
echo $s.$name.$s;



 ?>
</body>
</html>