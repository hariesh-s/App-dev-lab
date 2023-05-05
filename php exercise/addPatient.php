<?php include "connect.php";

$name = $_POST["name"];
$dob = $_POST["dob"];
$contactNo = $_POST["contact"];
$dept = $_POST["dept"];

$sql = "INSERT INTO patient(Pname,DOB,ContactNo,Department) VALUES('$name','$dob','$contactNo','$dept');";
$result = $conn->query($sql);
$conn->close();
?>

