<?php
//session_start();
//include_once "admin_check.php";
include_once "../includes/connection.php";

$title=" ";
$linklabel=" ";
$body=" ";

$title=$_POST['pagetitle'];
$linklabel=$_POST['linklabel'];
$pagebody=mysql_real_escape_string($_POST['pagebody']);


$query=mysqli_query($sql, "INSERT INTO pages (pagetitle, linklabel, pagebody,lastmodified) VALUES('$title','$linklabel','$pagebody',now())") or die (mysqli_error($sql));
echo"Operation completed successfully";
echo "<a href='../'><h4>View life site</h4></a> or <a href='create_page.php'><h4>Create another page</h4></a>";


?>