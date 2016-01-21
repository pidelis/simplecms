<?php
include_once"../includes/connection.php";

$delete = $_GET['delete'];
$query =mysqli_query($sql, "DELETE FROM pages WHERE id='$delete'") or die (mysqli_error($sql));
Echo "Page delete was successful";
echo "<a href='index.php'>Back</a>";
?>