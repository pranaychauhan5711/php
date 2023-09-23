<?php
ob_start();
session_start();
if(!empty($_SESSION['logined'])){
}
else{
    $_SESSION['logined']="no";
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./selfcss/login.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Font awesome cdn-->
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"> 
    </script>
    <title>LGN Admin Login</title>
</head>
<body>
<div class="container">
    <div class="forms-container">
        <form action="" method="post" class="sign-in-form" id="sign-in">
            <h2 class="title">Sign In</h2>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password">
            </div>
            <input type="submit" value="login" class="btn solid">
        </form>
    </div>
</div>
</body>
<script>
    $(document).ready(
        function()
        {

        }
    );
</script>
<?php
if($_SESSION['logined']=="yes"){
    header('location:adminpanel.php');
}
else if($_SERVER['REQUEST_METHOD']=="POST" && !empty($_POST['username']) && !empty($_POST['password']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username==$password){
        $_SESSION['adminotp']=rand(1000,9999);
        $_SESSION['logined']="";
        header('location:adminverifyotp.php');
        exit();
    }
    else{
        echo"Enter valid credentials";
    }
}