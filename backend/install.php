<?php 

include("include/Database.php");


    function install(){

      global $database;

      $database->query("SHOW TABLES LIKE 'users'");
        
      if(mysql_affected_rows() == 0){
        createTables();
      }else{
        echo "<h1>Tables already exist</h1><p>It's a good idea to delete this file.</p>";
      }  

    }

    function createTables(){
        global $database;
        $q1 = "CREATE TABLE users (  
          id varchar(25) PRIMARY KEY,
          username varchar(30),
          password varchar(32),
          userlevel tinyint(1) unsigned not null,
          email varchar(50),
          timestamp int(11) unsigned not null,
          email_confirmed tinyint(1)
        );";
        

        
        if($database->query($q1)){ 
            $response = '<h1>Databases Created!</h1><p>You can delete the install.php file.</p>';
        }else{
            $response = 'Error';
        }

        echo '<h1>'.$response.'</h1>';
    }
    
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Install</title>

  <meta name="viewport" content="width=device-width">

  <style>
    .msg{
      width: 60%;
      margin: 10% auto 0 auto;
      text-align: center;
      border: 1px solid #666;
    }
  </style>

</head>
<body>

<div class='msg'>
<?php install(); ?>
</div>

</body>
</html>
