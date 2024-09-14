<?php 

require("conn.php");
require("function.php");
$sql =  gen_sql($_POST);
$ress = $conn->query($sql);

$r = $ress->fetch_array();
echo $r[0];
?>