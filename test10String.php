<!DOCTYPE html>
<html>
<body>



<h5>Print Number without divided by 3 from 1 to 100 using continue</h5>

<?php 
for ($x = 0; $x < 100; $x++) {
    if ($x % 3==0) {
      continue;
    }
    echo "The number is: $x <br>";
}
?> 
</body>
</html>