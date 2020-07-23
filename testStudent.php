<!DOCTYPE html>
<html>
<body>
<h3>Student Information Form</h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<table>
 <tr>
 <td>Name</td>
 <td><input type="text" name="sname"></td>
 </tr>

 <tr>
 <td>Email</td>
 <td><input type="text" name="semail"></td>
 </tr>

 <tr>
 <td>Phone</td>
 <td><input type="text" name="sphone"></td>
 </tr>
  
 <tr>
 <td> Township</td>
 <td><select name="stown">
            <option value="">Select Your Town</option>
            <option value="Dawei">Dawei</option>
            <option value="Yangon">Yangon</option>
            <option value="Mandalay">Mandalay</option>
    </select> </td>
 </tr>

 <tr>
 <td>Grade</td>
 <td><input type="radio" name="sgrade" value="First Year ">First Year
<input type="radio" name="sgrade" value="Second Year">Second Year
<input type="radio" name="sgrade" value="Third Year">Third Year
<input type="radio" name="sgrade" value="Fourth Year">Fourth Year 
<input type="radio" name="sgrade" value="Fifth Year">Fifth Year</td>
 </tr>

 <tr>
 <td>Subjects</td>
 <td><label>501<input type="checkbox" name="subjects[]" value="501"><label>
<label>502<input type="checkbox" name="subjects[]" value="502"><label>
<label>503<input type="checkbox" name="subjects[]" value="503"><label></td>
 </tr>


 <tr>
 <td></td>
 <td><input type="submit" value="Submit"></td>
 </tr>
  
  </table>
</form>
<table  border="1" cellpadding="3" cellspacing="0">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST['sname'];
  $email = $_POST['semail'];
  $phone = $_POST['sphone'];
  $township=$_POST['stown'];
  $grade=$_POST['sgrade'];
  $subject=$_POST['subjects'];


  echo "<tr>";
  echo "<td>Name </td> ";
  echo  "<td>$name</td> ";
  echo "</tr>";

  echo "<tr>";
  echo "<td>Email </td> ";
  echo  "<td> $email</td> ";
  echo "</tr>";

  echo "<tr>";
  echo "<td>Phone </td> ";
  echo  "<td> $phone</td> ";
  echo "</tr>";

  echo "<tr>";
  echo "<td>Township </td> ";
  echo  "<td> $township</td> ";
  echo "</tr>";

  echo "<tr>";
  echo "<td>Grade </td> ";
  echo  "<td> $grade</td> ";
  echo "</tr>";
  

  echo "<tr>";
  echo "<td>Subjects </td> ";
  echo "<td>";
  
  $sub = count($subject);

 
  for($i=0; $i < $sub; $i++)
  {
  echo($subject[$i] . " ");
  }
  echo "</td>";
}

?>
</table>
</body>
</html>