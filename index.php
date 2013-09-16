<?php
date_default_timezone_set('Europe/Berlin');
?>
<!DOCTYPE html>
<html>
<head>

  <!-- Usar UTF-8 como "Character encoding" -->  
  <meta charset="utf-8">
  
  <title>Machoculto | Lugar de palabra y figura</title>

  <link href="styles.css" rel="stylesheet" type="text/css">

</head>

<body>

  <header>
     <h1>MachOculto</h1>
     <h2>Lugar de palabra y figura</h2>
  </header>
  <hr>
  <section>
    <?php include "intro.html"; ?>
  </section>
  
  <footer>
    &copy;  MachOculto <?php echo date('Y'); ?> 
  </footer>  

</body>
</html>
