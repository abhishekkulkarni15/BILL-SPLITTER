<?php
$con = new mysqli("localhost","root","","billSplitter");
$sql = "select name from roomate";
$result = $con->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<button type=\"button\" class=\"btn btn-success\">" . $row['name'] . "</button><br><br>";
  } 
} 
else{
  echo " Sorry! Could not find anything... ";
}
?>