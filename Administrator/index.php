<?php
require_once"admin_check.php";
?>
<html>
<head>
    <title>Administrator</title>
    <link rel="stylesheet" type="text/css" href="../styles/style1.css">
    </head>
    <body>
        <div id="adminheader">
        <h1>Welcome to the Administration panel</h1>
        <h1>Access to this panel is explicitly for administrators</h1>
        <p>Welcome aboard Admin. What would you like to do?</p>
            </div>
    <div id="admincontent">
        <!--Enables page creation-->
        <a href="create_page.php"><h4>Create New Page</h4></a>

        <!--form for page editing-->
        <form action="edit_page.php" method="get">
            <input type="submit" name="submit" value="Edit existing page"/> 
                <input type="text" name="edit" placeholder="Enter page number">
            </form>
        
            <!--form for page deletes-->
            <form action="delete_page.php" method="get">
            <input type="submit" name="submit" value="Delete page"/> 
                <input type="text" name="delete" placeholder="Enter page number">
            </form>
    <a href="../"><h4>view live site</h4></a>
        </div>
    </body>
</html>