<?php
$error_msg="";
if($_POST['username']){
$username=$_POST['username'];
$password=$_POST['password'];
    
    $admin = "Njenga";
    $adminpass = "expload";
    
    if(($username !=$admin) && ($password !=$adminpass)){
        $error_msg= '<font color ="#FF0000">Your login information is incorrect</font>';
        } else {
        //session_register('admin');
        $_SESSION['admin'] =$username;
        require_once"index.php";
        exit();
    }
}
?>

<?php
if($_SESSION['admin'] != "theterminator")
{
echo'<h3>Only the site administrator is allowed here</h3><br>
<form name="login" method="post" target="_self">
<h4>Please Log In here:'.$error_msg.'<//h4><br>
<label>Username:</label><input type="text" name="username" placeholder="username"/><br><br>
<label>Password:</label><input type="password" name="password"/><br>
<input type="submit" value="login as admin" name="submit"/><br>
</form>
<a href="../">Click on this link to go back to the site</a>';
exit();
}
?>