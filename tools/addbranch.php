<?php 

require("conn.php");
extract($_POST);
$sql = "call branch_sp('$a','$b','$c','$d','$e','$f')";
$ress = $conn->query($sql);

$r = $ress->fetch_array();
//$msg = explode("|",$r[0]);
echo $r[0];
?>

<!-- <button class="btn btn-<?php //echo $msg[0] ?> btn-block">
	<?php //echo $msg[1] ?>
</button> -->