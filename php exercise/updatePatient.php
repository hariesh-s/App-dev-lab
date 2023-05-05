<?php include "connect.php";

$name = $_POST["name"];
$dob = $_POST["dob"];
$contactNo = $_POST["contact"];
$dept = $_POST["dept"];

$sql = "UPDATE patient SET DOB='$dob', ContactNo='$contactNo', Department='$dept' WHERE Pname='$name';";
$result = $conn->query($sql);
$conn->close();
?>

