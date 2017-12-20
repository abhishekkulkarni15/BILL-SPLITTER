<?php
$name = $_GET["roomateName"];
$con = new mysqli("localhost","root","","billSplitter");
$sql = "insert into roomate(name) values('".$name."');";

if ($con->query($sql) === TRUE) {
	echo "RoomMate Added.";
} else {
	echo "Cannot add Rommate.";
}

?>
