<!DOCTYPE html>
<html>
<body>
<h5>all of the potential combinations 
of a two-digit decimal combination, printed in a comma delimited format.</h5>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 Enter Number: <input type="text" name="num">
  <input type="submit">
</form>

<?php
echo "<h3>Your Result</h3>";
$num= $_POST ["num"];

echo "$num";
echo "<br>";
echo "Final Result:";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $num=$_POST["num"];
}
echo chunk_split($num,2,",")
?>
      
</body>
</html>