<?php
session_start();
require_once"includes/connection.php";

//QUERY MODULE DATA FOR DISPLAY
$sqlcommand = "SELECT modulebody FROM modules WHERE showing='1' AND name='footer'  Limit 1";
$query = mysqli_query($sql, $sqlcommand) or die (mysqli_error($sql));

$menuDisplay = '';
while ($row = mysqli_fetch_array($query)) { 
    $footer = $row["modulebody"];
} 
mysqli_free_result($query);

//Creatin custom display
$sqlcommand = "SELECT modulebody FROM modules WHERE showing='1' AND name='custom1' Limit 1";
$query = mysqli_query($sql, $sqlcommand) or die (mysqli_error($sql));

$menuDisplay = '';
while ($row = mysqli_fetch_array($query)) { 
    $custom1 = $row["modulebody"];
} 
mysqli_free_result($query);


//The main menu code lies here
$sqlcommand = "SELECT id,linklabel FROM pages WHERE showing='1' ORDER BY id ASC";
$query = mysqli_query($sql, $sqlcommand) or die (mysqli_error());

$menuDisplay = '';
while ($row = mysqli_fetch_array($query)) { 
    $pid = $row["id"];
    $linklabel = $row["linklabel"];
	
	$menuDisplay .= '<a href="index.php?pid=' . $pid . '">' . $linklabel . '</a><br />';
	
} 
mysqli_free_result($query);

//BOdy coding
if(!$_GET['pid']){
    $pageid='1';
}else{
    $pageid=ereg_replace("[^0-9]","",$_GET['pid']);
}
//query body section
$sqlcommand = "SELECT linklabel,pagebody FROM pages WHERE id='$pageid' LIMIT 1";
$query = mysqli_query($sql, $sqlcommand) or die (mysqli_error());
    while($row = mysqli_fetch_array($query)){
        $body=$row["pagebody"];
        $title=$row["linklabel"];
    }
mysqli_free_result($query);
    
?>
<html>
<head>
<title>Njenga</title> 
    <link rel="stylesheet" type="text/css" href="styles/style1.css">
    <script src="scripts/wysiwyg-settings.js"></script>
    <style>
    body{
    background-image: url(images/lead.jpg);
    background-repeat: no-repeat;
   background-size:cover;
    background-position:center;
    }
    </style>
</head>
    <body>
        <div id="header">
           
          <font face="comic sans ms">  
              <h1 align="center">Programming Language Solutions</h1></font>
            <h4 align="center">indepthcoding.com</h4>
        <h4 align="center">The beauty of understanding the language core!!</h4>
        </div>
        
             <strong><?php echo $custom1;?></strong>
            
                
    <div id="menu">
        <?php echo"$menuDisplay";?>
        </div>
        
        <div id="content">
        <h2 align="center"><?php echo $title; ?></h2>
        
        <?php echo $body; ?>
        </div>
        <div id="me">
        <img src="images/njngthn.jpg" title="Njenga" alt="njenga" style="height:200px; width:200px; float:right; border-radius:5px;"/>
            <marquee direction="down">
                <p>Name:Pidelis Njenga Pere</p>
                <p>Reg no:EB1/08757/12</p>
                <p>Unit: COMP 408</p>
                <p>Unit Name: WEB DESIGN</p>
            </marquee>
        </div>
        <br>
        <br>
        <div id="footer">
        <?php echo $footer;?>
        <?php echo "<br/>Page number:----".$pageid; ?>
            <a href="Administrator/" target="_blank">Admin</a>
         </div>
        
    </body>
</html>