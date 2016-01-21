
<html>
<head>
<title>Create Page</title> 
    <link rel="stylesheet" type="text/css" href="../styles/style1.css">
</head>
    <body>
       <div id="entry"> <h2>Administrator page creation</h2>
    <form action="page_create_parser.php" method="post" >
        <label>Page Full Title </label><input type="text" name="pagetitle" placeholder="Enter page title here" require="required"/>
        <label>  Link Label  </label><input type="text" name="linklabel" placeholder="Enter label to appear as link" require="required"/><br><br>                                                          
        <textarea  name="pagebody" placeholder="Enter the body here" cols="88" rows="16"/></textarea><br><br>
        <input type="submit" name="submit" value="save"/>
        </form>
        </div>
    </body>
</html>