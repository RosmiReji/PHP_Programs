<?php
$servername = "localhost";
$username = "20mca047";
$password = "2715";
$dbname = "20mca047";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `stud` (`id`, `name`, `branch`,`mark`) VALUES (NULL, 'Rosmi', 'MCA',65);";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>