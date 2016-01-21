<?php
require_once "connection.php";
// Table structure for table `modules`
echo "<p>Tables creation<p>";

$modules="CREATE TABLE  modules (
id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  modulebody text NOT NULL,
  showing enum('0','1') NOT NULL, primary key(id)
)";
mysqli_query($sql, $modules) or die (mysqli_error($sql));
echo"<h3>Nice job table module created :)</h3><br/>";



// Table structure for table `pages`


$pages="CREATE TABLE pages (
id int(11) NOT NULL,
  pagetitle varchar(255) NOT NULL,
  linklabel varchar(255) NOT NULL,
  pagebody text NOT NULL,
  pageorder int(11) NOT NULL,
  showing enum('0','1') NOT NULL DEFAULT '1',
  keywords varchar(255) NOT NULL,
  description varchar(255) NOT NULL,
  lastmodified date NOT NULL,
  extra varchar(255) NOT NULL, primary key (id)
) ";

mysqli_query($sql,$pages) or die (mysql_error($sql));
echo"<h3>Nice job table pages created :) </h3><br/>";




?>