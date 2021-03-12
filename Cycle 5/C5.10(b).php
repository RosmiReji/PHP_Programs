<html>
<head>
<title>display data in table format</title>
</head>
<body><h2>STUDENT DETAILS</h2>
<?php
$servername = "localhost";
$username = "20mca047";
$password = "2715";
$dbname = "20mca047";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `stud_info`";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  echo "<table border='1'>
<tr>
<th>Rollno</th>
<th>Name</th>
<th>Gender</th>
<th>Address</th>
</tr>";
  while($row = mysqli_fetch_assoc($result)) {

 echo "<tr>";
 echo "<td>".$row['rollno']."</td>";
 echo "<td>".$row['names']."</td>";
 echo "<td>".$row['gen']."</td>";
 echo "<td>".$row['address']."</td>";
 echo "</tr>";
  }

} else {
  echo "0 results";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>