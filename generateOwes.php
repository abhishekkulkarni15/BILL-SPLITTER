<?php
$name1 = $_GET["roomMate1"];
$name2 = $_GET["roomMate2"];
$amount = $_GET["finalAmount"];

echo $name1;
echo $name2;
echo $amount;

$con = new mysqli("localhost","root","","billSplitter");
$sql = "insert into owes(name1,name2,amount) values('".$name1."','".$name2."',".$amount.");";

echo $sql;

if ($con->query($sql) === TRUE) {
	echo "Owes";
} else {
	echo "Cannot add.";
}

?>
