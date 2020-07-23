<!DOCTYPE html>
<html>
<body>
<h5>calculate and print the factorial of a number using a for loop</h5>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 Enter Number: <input type="text" name="num">
  <input type="submit" value="Submit">
</form>

<?php
echo "<h3>Your Result</h3>";
$num= $_POST ["num"];
echo "$num";
echo "<br>";

$x = 1;
for($i=1;$i<=$num-1;$i++)
{
 $x*=($i+1); 
}
echo "The factorial of  $num = $x"."\n";
?>
      
</body>
</html>