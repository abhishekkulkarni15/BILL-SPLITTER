<?php
$name = $_GET["roomateName"];
$con = new mysqli("localhost","root","","billSplitter");
$sql = "select id from roomate where name='".$name."';";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo $row["id"];
	}
}
?>