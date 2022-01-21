<?php
session_start();
require_once '../dao/pdo.php';
if(isset($_POST['submit'])){
      $conn = pdo_get_connection();
      $email = $_POST['email'];
      $password = $_POST['password'];
      $sql = "SELECT * FROM users where email='$email'";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $user = $stmt->fetch();
      if(empty($email)||empty($password)){
         header("Location: /dinhbtph14679_ass1_js/login/login_sigup.php");
         die;
      }
      if($user && password_verify($password,$user['password']) || $password == $user['password']){
         echo "Dang nhap thanh cong";
         $_SESSION['users']=[
         'id'=>$user['id_user'],
         'name'=>$user['name_user'],
         'email'=>$user['email'],
         'phone_number' =>$user['phone_number'],
         'avatar'=>$user['avatar'],
         'address'=>$user['address'],
         'role'=>$user['role'],
         ];
         header('location:../user/index.php');
         die;
      }else {
         echo "Dang nhap that bai";
         header("Location: /dinhbtph14679_ass1_js/login/login_sigup.php");

      }
   }
?>