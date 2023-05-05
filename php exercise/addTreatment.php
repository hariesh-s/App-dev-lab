<?php include "connect.php";

$pid = $_POST["patientID"];
$type = $_POST["type"];
$diagid = $_POST["diagID"];
$doctor = $_POST["doctor"];

$sql = "INSERT INTO treatment VALUES('$pid','$type','$diagid','$doctor');";
$result = $conn->query($sql);

$conn->close();
?>

