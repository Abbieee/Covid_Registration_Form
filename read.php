<?php
include("sql_conn.php");

$sql = "SELECT * FROM user_detail";
$result = $conn->query($sql);
echo "<table>
<thead>
<tr>
<td>Sl No.</td>
<td>First Name</td>
<td>Last Name</td>
<td>Email</td>
<td>Photo Proof</td>
<td>Photo Id Number</td>
<td>Gender</td>
<td>Age</td>
<td>Medical Issue</td>
</tr>
</thead>
<tbody>";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo "
<tr>
<td>" . $row["UserID"]. "</td>
<td>" . $row["FirstName"]. "</td>
<td>" . $row["LastName"]. "</td>
<td>" . $row["Email"]. "</td>
<td>" . $row["PhotoIdProof"]. "</td>
<td>" . $row["PhotoIdNumber"]. "</td>
<td>" . $row["Gender"]. "</td>
<td>" . $row["Age"]. "</td>
<td>" . $row["MedicalIssue"]. "</td>

</tr>
";

  }
} else {
  echo "<tr><td colspan='9'>No Results Found</td><tr>";
}
echo"</tbody>
</table>";
$conn->close();
?>
