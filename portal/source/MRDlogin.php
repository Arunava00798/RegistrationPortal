
<?php  


if(isset($_POST['login']))
{
    if(empty($_POST['username']) || empty($_POST['password']))
    {
        $message='ALL FIELDS ARE REQUIRED.';
    }
    else
    {
       $user = "MRD";
       $pass = "msit";
       $username = $_POST['username'];
       $password = $_POST['password'];
       if(($username == $user) && ($password == $pass))
       {
           
            header('location: MRD.php');
       }
       else
       {
        $message='WRONG USERNAME OR PASSWORD.';
       }

    }
}
if(isset($_REQUEST['msg']))
{
    $msg_error=$_REQUEST['msg'];
}

?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
</head>

<body>
<div class="login">
    <h1>Login</h1>
    <?php
    if(isset($message))
    {
        echo '<h1 style="font-size: 16px; color: #ff1c1c; text-align: center; font-family: "Arial Hebrew", Arial, sans-serif;">'.$message.'</h1>';
    }
    ?>
    <div id="msg_error"> </div>
    <form method="post">
        USERNAME &nbsp; &nbsp;<input type="text" name="username" id="username" placeholder="Username" /><br><br>
        PASSWORD &nbsp; &nbsp;<input type="password" name="password" id="password" placeholder="Password" /><br><br>
        <button type="submit" name="login">Let me in.</button>
        
    </form>
</div>
</body>
</html>
