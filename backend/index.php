<?php
include 'include/Session.php';
if(!$session->isLogged){
  header("Location: login.php");
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

  <header>
     <h1>MachOculto</h1>
     <h2>Backend</h2>
     <a href="controller.php">Logout</a>
  </header>
  <hr>
  <section>

  </section>
  
  <footer>
    &copy;  MachOculto <?php echo date('Y'); ?> 
  </footer>  

</body>
</html>