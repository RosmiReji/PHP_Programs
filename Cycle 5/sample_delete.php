<?php
$servername = "localhost";
$username = "20mca047";
$password = "2715";
$dbname = "20mca047";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$did=$_GET["delete"];
if (!$conn)
{
echo "Connection failed";
}
$qry1="DELETE from `stud_details` where id='$did'";
if (mysqli_query($conn, $qry1)) {
  echo "Record deleted successfully";

}
?>