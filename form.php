<?php
include('connect.php');
$account = $_POST["account"];
$provider = $_POST["provider"];

$query = "SELECT * FROM ZESA WHERE  account = '14101507755' ";
$ret = mysql_query($query,$con); echo $ret;
if($ret){
     if(mysqli_num_rows($result) > 0){
	while($row = mysql_fetch_array($ret,$con)){
		echo $row["account"];
		echo $row["customer"];
		echo $row["address"];
	}
}
echo "zero";
}
else
	echo "oops something wen wrong ".mysql_error($con);
?>