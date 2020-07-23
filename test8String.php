<!DOCTYPE html>
<html>
<body>

<h5>Show number of 1 to 1000 in table format</h5>
<table  border="1" cellpadding="3" cellspacing="0">
<?php

for($i=1;$i<=10;$i++)
{
echo "<tr>";
for ($j=1;$j<=10;$j++)
  {
      $result=$i*$j;
  echo "<td>$result</td>";
  }
  echo "</tr>";
  }
 
?>
   </table>    
</body>
</html>