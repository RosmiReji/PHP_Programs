<html>
<head>
<title>display data in table format</title>
</head>
<body><h2>CUSTOMER DETAILS</h2>
<?php
$servername = "localhost";
$username = "20mca047";
$password = "2715";
$dbname = "20mca047";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `customer`";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  echo "<table border='1'>
<tr>
<th>Cid</th>
<th>Name</th>
<th>Item Purchased</th>
<th>Mobile No</th>
</tr>";
  while($row = mysqli_fetch_assoc($result)) {

 echo "<tr>";
 echo "<td>".$row['c_no']."</td>";
 echo "<td>".$row['c_name']."</td>";
 echo "<td>".$row['item_purchased']."</td>";
 echo "<td>".$row['mob_no']."</td>";
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