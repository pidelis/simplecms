<?php
session_start();
include_once"../includes/connection.php";

$id=$_GET['edit'];

$query1="SELECT pagetitle,linklabel,pagebody FROM pages WHERE id='$id' LIMIT 1 ";
$query=mysqli_query($sql,$query1) or die (mysqli_error($sql));
while($row=mysqli_fetch_array($query)){
$pagetitle=$row["pagetitle"];
$linklabel=$row["linklabel"];
  $pagebody=$row["pagebody"];   
}
mysqli_free_result($query);
?>
<html>
<head>
<title>Update Page</title>
    <link rel="stylesheet" type="text/css" href="../styles/style1.css">
    
    <link rel="stylesheet" href="../styles/style.css" type="text/css">
		
		
    
</head>
    <body>
        
   <div id="entry">
       <h2>Administrator Page Editing</h2>
        <form action="update_parser.php" method="post" >
        <input type="text" name="id" value="<?php echo $id ?>" hidden="hidden" /><br>
        <label>Page Full Title</label><input type="text" name="pagetitle" value="<?php echo $pagetitle; ?>" require="required" /><br>
        <label>Link Label</label><input type="text" name="linklabel" value="<?php echo $linklabel; ?>" require="required" /><br>                                                            
        <textarea id="textarea1" name="pagebody" cols="88" rows="16"/><?php echo $pagebody; ?></textarea><br>
        <input type="submit" name="submit" value="save"/>
        </form>
        </div>
    </body>
</html>