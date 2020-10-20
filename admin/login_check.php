<?php
    session_start();

    $con = mysqli_connect('localhost','root','Minhthien6879','computershop');
    //if($con->connect_error){
   //    echo "ERROR 404";
    //}
    //else
    //{
    //    echo "Connected";
    //}
    $user = $_POST['user'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM login_admin WHERE user ='$user' AND password = '$password'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    if($row['user'] == $user && $row['password'] == $password){
        echo include('banhang.php');
    }else{
        echo "<script>alert('Check lai cai user, password')</script>";
        echo "<script>location.replace('index.php')</script>";
}
?>