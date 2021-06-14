<?php
require_once("db.php");
$sql = "DELETE FROM qalist WHERE idQ='" . $_GET["idQ"] . "'";
mysqli_query($conn,$sql);
header("Location:list.php");
?>