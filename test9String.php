<!DOCTYPE html>
<html>
<body>
<h5>In Number Array, find the average, two minimum value and two maximum values</h5>
<?php  

$array = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,  
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73);  

echo "<h4>Array list</h4>";
foreach ($array as $key => $value) {
    echo "  ".$value; 
}
echo "<br>";

$t=0;  
$l=count($array);  
foreach($array as $v)  
{  
 $t += $v;  
}  
 $avg= $t/$l;  
 echo "average value is : ".$avg."  ";   

echo "<br>List of two max :"; 
$m[0]= max($array); 
for($i=1; $i <2 ; $i++)
{ 
$m[$i]=max(array_diff($array,$m));
}
foreach ($m as $key => $value) {
    echo "  ".$value; 
}

echo "<br> List of two min : ";
$mi[0]= min($array); 
for($i=1; $i <2 ; $i++)
{ 
$mi[$i]=min(array_diff($array,$mi));
}

foreach ($mi as $key => $value) {
    echo "  ".$value; 
}
?>  
</body>
</html>