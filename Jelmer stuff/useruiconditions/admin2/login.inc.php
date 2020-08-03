<?php

if (isset($_POST['login_btn'])) {

require 'security.php';

$email= $_POST['email'];
$password = $_POST['password'];

if (empty($email) || empty($password)) {
 header("Location: ../index.php?error=emptyfields");
 exit();
}
else{
  $sql = "SELECT * FROM register WHERE username=?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql)){
      header("Location: ../index.php?error=sqlerror");
      exit();
  }
  else{
   mysqli_stmt_bind_param($stmt, "s", $email,);
   mysqli_stmt_execute($stmt);
   $result = mysqli_stmt_get_result($stmt); 
   if ($row = mysqli_fetch_assoc($result)){
   $pwdCheck = $password == $row['password'];
   if($pwdCheck == false){
       header("Location: ../index.php?error=verkeerdwachtwoord");
       exit();
   }

elseif ($pwdCheck == true){
   session_start();
   $_SESSION['userId'] = $row['id'];
   $_SESSION['userUid'] = $row['username'];

   header("Location: ../home.php?login=success");
   exit();
}
      } else {
         header("Location: ../index.php?error=nouser");
         exit();
      }
   }
}
}
else {
header("Location: ../index.php?error=false");
exit();
}