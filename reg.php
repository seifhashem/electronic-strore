<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'hahaa');

$username= $_POST['username'];
$CUS_PHONE= $_POST['CUS_PHONE'];
$cus_email= $_POST['cus_email'];
$pass_word= $_POST['pass_word'];
$CUS_CODE= $_POST['CUS_CODE'];
$birthdate=$_post['birthdate'];


$s="select * from customer where username = '$username'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num==1){
    echo '<script type="text/javascript">'; 
    echo 'alert("This name has already been used! please choose another name");'; 
    echo 'window.location.href = "account.php";';
    echo '</script>';

}else{
    $stmt = $con-> prepare("insert into customer(username, CUS_PHONE, cus_email, pass_word, CUS_CODE, birthdate) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssii", $username, $CUS_PHONE, $cus_email, $pass_word, $CUS_CODE, $birthdate);
    $stmt->execute();
    echo '<script type="text/javascript">'; 
    echo 'alert("Registered successfuly");'; 
    echo 'window.location.href = "account.php";';
    echo '</script>';
}


?>