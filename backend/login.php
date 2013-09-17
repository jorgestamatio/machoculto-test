<?php
include 'include/Session.php';
if($session->isLogged){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>

  <!-- Usar UTF-8 como "Character encoding" -->  
  <meta charset="utf-8">
  
  <title>Machoculto | Backend</title>

  <link href="css/styles.css" rel="stylesheet" type="text/css">

</head>

<body>

  <section class='login'>
    <h2>Login</h2>
    <form action="controller.php" method="POST">
      <input type="text" name="user" placeholder="Username">
      <input type="password" name="pass" placeholder="Password">
      <input type="submit" value="Login">
    </form>
  </section>
  
  <footer>
    &copy;  MachOculto <?php echo date('Y'); ?> 
  </footer>  

</body>
</html>