<html><body>Student details</body></html>
<?php
$servername = "localhost";
$username = "20mca047";
$password = "2715";
$dbname = "20mca047";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT `id`, `name`, `dept` FROM `stud_details`";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Branch</th>

</tr>";
  while($row = mysqli_fetch_assoc($result)) {
 echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['dept']."</td>";
echo "</tr>";
  }

} else {
  echo "0 results";
}
echo "</table>";
mysqli_close($conn);
?>
