<?php
include_once"../includes/connection.php";

$id=$_POST['id'];
$pagetitle=$_POST['pagetitle'];
$linklabel=$_POST['linklabel'];
$pagebody=$_POST['pagebody'];


$update=mysqli_query($sql, "UPDATE pages SET pagetitle='$pagetitle',linklabel='$linklabel',pagebody='$pagebody', lastmodified='now()' WHERE id='$id'") or die (mysqli_error($sql));
 echo "update performed successfully";
     echo"<a href='../'>View life site</a>";

?>