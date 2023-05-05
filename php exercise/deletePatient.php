<?php include "connect.php";

$pname = $_POST["pname"];

$sql = "DELETE FROM patient WHERE Pname='$pname';";
$result = $conn->query($sql);

$conn->close();
?>

