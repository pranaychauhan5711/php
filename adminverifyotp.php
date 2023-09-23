<?php
session_start();
echo $_SESSION['adminotp'];
echo "<form method='post' action=''>";
echo "<input type='text' placeholder='Enter OTP' name='otpen'>";
echo "<input type='submit'></form>";
?>
<?php
if($_SESSION['logined']=="yes" && !empty($_SESSION['logined'])){
header('location:adminpanel.php');
}
else if($_SERVER['REQUEST_METHOD']=="POST" && !empty($_POST['otpen'])){
$en=$_POST['otpen'];
$a=$_SESSION['adminotp'];
if($en==$a){
    $_SESSION['logined']="yes";
    header('location:adminpanel.php');
}
}
?>