<?php include "connect.php";

$diagnosis = $_POST["diagnosis"];
$medication = $_POST["medication"];
$dept = $_POST["dept"];

$sql = "INSERT INTO diagnosis(Dname,Medication,Department) VALUES('$diagnosis','$medication','$dept');";
$result = $conn->query($sql);

$conn->close();
?>

