<?php
require_once '../globle.php';
require_once '../dao/pdo.php';
require_once '../dao/user.php';
$erros="";
if (isset($_POST['submit'])) {

   $conn = pdo_get_connection();
   $email = $_POST['email'];
   $pass = $_POST['password'];
   $password = password_hash($pass, PASSWORD_DEFAULT);
   $name_user = $_POST['name'];
   $phone_number = $_POST['phone_number'];
   $address = $_POST['address'];
   $gender = $_POST['gender'];
   $sql = "SELECT * FROM users where email = :email";
   $query = $conn->prepare($sql);
   $query->execute(
      array(
         'email' => $email,
      )
   );
   if (empty($email) || empty($pass) || empty($name_user) || empty($phone_number) ||  !is_numeric($phone_number) || empty($address)) {
      $erros .= "bạn không nhập đúng hoặc đã bỏ trống dữ liệu ";
   }
   if ($_FILES['avatar']['size']) {
      if ($_FILES['avatar']['type'] == "image/jpeg") {
         $avatar = upload_file('avatar', $PATH_IMG . '/');
         $avatar = strlen($avatar) > 0 ? $avatar : 'product.jpg';
      } else {
         $erros .= "<br> file bạn chọn ảnh không phải là ảnh";
      }
   } else {
      $erros .= "<br> Vui lòng chọn ảnh";
   }
   if (strlen($erros) > 0) {
      $erros .= "<br>vui lòng nhập lại";
      header("location: login_sigup.php?erros=" . $erros);
      die;
   }
   if ($query->rowCount() > 0) {
      echo "Tai khoan nay da ton tai!";
   } else {
      $role=0;
      user_insert($name_user,$name_user,$email,$password,$phone_number,$gender,$avatar,$address,$role);
      // $conn->exec($insert);
      echo "dang ki thanh cong!";
      $erros="";
      header("Location:" . $_SERVER['HTTP_REFERER']);
      die;
   }
}
