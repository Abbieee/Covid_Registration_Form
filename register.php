<?php
include("index.php");


if (isset($_POST['save'])) {
	$firstname =$_POST['firstname'];
	$lastname =$_POST['lastname'];
	$email =$_POST['email'];
	$confirmemail =$_POST['confirm_email'];
	$photoidproof =$_POST['photo_id_proof'];
	$photoidnumber =$_POST['photo_id_number'];
	$gender =$_POST['gender'];
	$age =$_POST['age'];
	$medicalissue=$_POST['medical_issue'];
	$sql = ("INSERT INTO user_detail(FirstName,LastName,Email,PhotoIdProof,PhotoIdNumber,Gender,Age,MedicalIssue)VALUES('$firstname','$lastname','$email','$photoidproof','$photoidnumber','$gender','$age','$medicalissue')");
	//mysqli_query("INSERT INTO user_detail(FirstName,LastName,Email,PhotoIdProof,PhotoIdNumber,Gender,Age,MedicalIssue)VALUES('Amrit','lastname','email','photoidproof','photoidnumber','gender','19','medicalissue')");
if ($conn->query($sql) === TRUE) {
 header('location: read.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
 ?>