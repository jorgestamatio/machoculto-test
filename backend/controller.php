<?php 

include 'include/Database.php';
include 'include/Session.php';


if(isset($_POST['user']) && isset($_POST['pass'])){
  $user = mysql_real_escape_string($_POST['user']);
  $pass = mysql_real_escape_string($_POST['pass']);

  if($session->login($user,$pass)){
      header("Location: index.php");
  }else{
      header("Location: login.php");
  }

}else{
  // If no post is submitted logout
  $session->logout();
}





?>