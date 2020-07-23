<!DOCTYPE html>
<html>
<body>
<h5>Create a new string taking the first 3 characters of a given string and return the
 string with the 3 characters added at both the front and back.
 If the given string length is less than 3, use whatever characters are there</h5>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter String: <input type="text" name="Fname">
  <input type="submit" value="Submit">
</form>

<?php

echo "<h3>Your Result</h3>";
$str= $_POST ["Fname"];
echo "Old String";
echo "<br>";
echo "$str";
echo "<br>";

echo "New String";
echo "<br>";
   if (strlen($str) < 3)
            {
                echo $str.$str.$str;
                echo "<br>";
            }
            else
            {
                $front = substr($str, 0, 3);
                echo $front.$str.$front;
                echo "<br>";
            }
       
        ?>
      
</body>
</html>