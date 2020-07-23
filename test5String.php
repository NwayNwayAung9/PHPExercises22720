<!DOCTYPE html>
<html>
<body>
<h5>Convert Initial Character to Upper of lower input string without using built-in method</h5>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  String: <input type="text" name="str">
  <input type="submit" value="Submit">
</form>

<?php

echo "<h3>Your Result</h3>";
$str= $_POST ["str"];
echo "Old String";
echo "<br>";
echo "$str";
echo "<br>";
echo "New String";
echo "<br>";
//function uppercase($str){
$result = '';
$res=str_split($str);
for($x=0; $x < count($res) ; $x++)
{
  $ch = ord($res[$x]);


if ($res[$x] >= 'a' && $res[$x] <= 'z')
$result .= chr($ch - 32);

else
$result .= $res[$x];
}
echo  $result;
//}
//echo uppercase($str);
?>
      
</body>
</html>