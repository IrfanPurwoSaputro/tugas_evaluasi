<?php
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "select * from user where username ='$username' and password='$password'";
$result = mysqli_query($connect,$query);
$fechResult = mysqli_fetch_assoc($result);
$rowcount = mysqli_num_rows($result);

if ($rowcount>0) { 
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
}

if ($fechResult['role']=='user') { 
    header("location:controller_toko.php");
} elseif ($fechResult['role']=='admin') {
    header("location:admin_page.html");
} else {
    echo "Anda gagal login ";
    echo " <a href='loginForm.html'>Login Form</a>";
}

mysqli_close($connect);
?>  