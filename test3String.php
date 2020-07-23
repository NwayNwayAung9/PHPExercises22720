<!DOCTYPE html>
<html>
<body>
<h5>Exchange the first and last characters in a given string and return the new string</h5>
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
  echo strlen($name) > 1 ? substr($name, strlen($name) - 1).substr($name, 1, strlen($name) - 2). substr($name, 0, 1) : $name;
   

 ?>
</body>
</html>