<?php
include_once "../includes/connection.php";

$Fname=mysql_real_escape_string($_POST["Fname"]);
$Mname=mysql_real_escape_string($_POST["Mname"]);
$Lname=mysql_real_escape_string($_POST["Lname"]);
$username=mysql_real_escape_string($_POST["username"]);
$email=mysql_real_escape_string($_POST["email"]);
$password=$_POST["password"];
$re_password=$_POST["re-password"];
$accesslevel=mysql_real_escape_string($_POST["accesslevel"]);

if($password !== $re_password){
echo "Sorry your passwords did not match";
}else{
    $password=md5($_POST["password"]);

    $query="INSERT INTO admin (Fname,Mname,Lname,email,accesslevel,username,password,lastlogin,temp_pass) VALUES('$Fname','$Mname','$Lname','$email','$accesslevel','$username','$password',now(),'')";
    mysqli_query($sql, $query) or die (mysqli_error($sql));
}

?>
<html>
<head>
    <title>Admin_info</title>
    </head>

    <body>
        <h1>Administrator Information</h1>
        <h3>Profile creation</h3>
    <form action="" method="post">
        <label>First Name</label><input type="text" name="Fname" placeholder="First Name"/><br>
        <label>Middle Name</label><input type="text" name="Mname" placeholder="middle Name"/><br>
        <label>Last Name</label><input type="text" name="Lname" placeholder="Last Name"/><br>
        <label>Username</label><input type="text" name="username" placeholder="username"/><br>
        <label>password</label><input type="password" name="password" placeholder="enter password"/><br>
        <label>password</label><input type="password" name="re-password" placeholder="re-enter password"/><br>
        <label>E-mail</label><input type="text" name="email" placeholder="abc@example.com"/><br>
        <label>Access Level</label><input type="text" name="accesslevel" placeholder="e.g 1"/><br>
        <input type="submit" name="submit" value="create"/>
        </form>
    </body>
</html>
