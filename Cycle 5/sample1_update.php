<html>
<head></head>
<title<Student Registration</title>
<body>

<?php
$uid=$_GET['update'];
$con=mysqli_connect("localhost","20mca047","2715","20mca047");
$qry="select*from stud_details where id='$uid'";
$res=mysqli_query($con, $qry);
$r=mysqli_fetch_array($res);
?>
<form method="post" action="sample1_update.php" >
<h1 style="text-align:center"><u>UPDATE</u></h1>

<table align="center"><tr>
<td>Student ID</td>
<td><input type="text" name="id" value="<?php echo $_GET['update']; ?>"></td>
</tr>
<tr>
<td>Name of Student</td>

<td><input type="text" name="name" value="<?php echo $r['name'];?>"></td></tr>
<tr>
<td>Branch</td>

<td><input type="text" name="dept" value="<?php echo $r['dept'];?>"></td></tr>
<tr>
<td colspan="2" style="text-align:right"><input type="submit" value="update"
name="update"></td></tr>
</table>
</form>
<?php

if(isset($_POST['update']))
{
$id=$_POST['id'];
$sname=$_POST['name'];
$branch=$_POST['dept'];

$qry1="UPDATE `stud_details` SET `name`='$sname',`dept`='$branch' where id='$id'";

if(mysqli_query($con, $qry1))
{
echo "<script>
alert('Updated successfully');
window.location.href='select1.php';

</script>";
}
}
?>
</body>
</html>