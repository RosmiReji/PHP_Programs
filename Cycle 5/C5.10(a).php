
<?php
$servername = "localhost";
$username = "20mca047";
$password = "2715";
$dbname = "20mca047";
$name =$_POST['txtname'];
$gender =$_POST['txtgen'];
$address = $_POST['add'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `stud_info` (`rollno`, `names`, `gen`,`address`) VALUES (NULL, '$name', '$gender','$address');";

/* if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 
<html>
<body>
<a href="C5.10(b).php">View</a>        <!--value inserting-->
</body>
</html>
*/


if(mysqli_query($conn, $sql))
{
echo "<script>
alert('Inserted successfully');
window.location.href='C5.10(b).php';

</script>";
}

?>

