<?php
include("sql_conn.php");

$sql = "SELECT  * FROM user_detail";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["UserID"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. " - Email: " . $row["Email"]. " " ." - PhotoIdProof: " . $row["PhotoIdProof"]. " " . " - PhotoIdNumber: " . $row["PhotoIdNumber"]. " " . " - Gender: " . $row["Gender"]. " " . " - Age: " . $row["Age"]. " " . " - MedicalIssue: " . $row["MedicalIssue"]. " " .   "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>