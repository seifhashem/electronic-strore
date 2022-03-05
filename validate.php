<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'hahaa');

$username= $_POST['username'];
$pass_word= $_POST['pass_word'];

$s="select * from customer where username = '$username' && pass_word ='$pass_word'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    $_SESSION['username'] = $username;
    header('location: index.php');

}else{
    echo '<script type="text/javascript">'; 
    echo 'alert("Wrong username or password! Try again");'; 
    echo 'window.location.href = "account.php";';
    echo '</script>';
}


?>