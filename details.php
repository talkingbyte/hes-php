<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='styles.css' type='text/css'>
<script type='text/javascript' src='scripts.js'></script>
<title>Welcome to Harrow English School, Darbhanga</title>
</head>
<body>
<?php
$user="root";
$password="Mariadb@123";
$host="localhost";
$database="hesdb";
$feed_class=$_POST['sel_class'];
$feed_section=$_POST['sel_section'];
$con=mysqli_connect($host,$user,$password,$database) or die("Couldn't connect to server.");
$qstring1="SELECT * FROM student_details_17_18 WHERE student_class='$feed_class' AND student_section='$feed_section'";
if($con!=null)
{
$res=mysqli_query($con,$qstring1);
//echo "List of Databases -\n<br/>";
while($row=mysqli_fetch_row($res))
{
echo $row[2]."<br/>";
echo $row[3]."<br/>";
}
}
?>
</body>
</html>
