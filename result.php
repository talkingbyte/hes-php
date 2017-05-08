<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='styles.css' type='text/css'>
<script type='text/javascript' src='scripts.js'></script>
<title>Welcome to Harrow English School, Darbhanga</title>
</head>
<body>
<h1>Harrow English School, Darbhanga</h1>
<div id='search_box'><form action='details.php' method='POST'><select name='sel_class'><option>Nursery<option>LKG<option>UKG<option value='1'>I<option value='2'>II<option value='3'>III<option value='4'>IV<option value='5'>V<option value='6'>VI<option value='7'>VII<option value='8'>VIII<option>IX<option>X<option>XI<option>XII</select>
<select name='sel_section'><option>A<option>B<option>C<option>D</select><input type='submit' value='Show details' /></form>
</div>
<?php
$user="root";
$password="Mariadb@123";
$host="localhost";
$database="hesdb";
$feed_class=$_POST['sel_class'];
$feed_section=$_POST['sel_section'];
$con=mysqli_connect($host,$user,$password,$database) or die("Couldn't connect to server.");
$qstring1="SELECT student_father,student_mother FROM student_details_17_18 WHERE student_class='$feed_class' AND student_section='$feed_section' AND student_roll_num=$feed_roll";
?>