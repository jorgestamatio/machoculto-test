<?php 
include('db_config.php');
/**
 * Database.php
 * 
 * The database class provides connection to tha database. D'oh.
 *
 */


      
class MySQLDB {

   var $connection;         //The MySQL database connection


   // Class constructor 
   function __construct(){
      // Make connection to database
      $this->connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die(mysql_error());
      mysql_select_db(DB_NAME, $this->connection) or die(mysql_error());
  
   }

   
   //Makes a query to the database and returns the result.
   function query($query){
      return mysql_query($query, $this->connection);
   }



   function confirmUserPass($user,$pass){
   		$this->query("SELECT * FROM users WHERE username = '$user' AND password='$pass'");
   		if(mysql_affected_rows() == 1){
        	return true;
      	}else{
      		return false;
      	}
   }



};

/* Create database connection */
$database = new MySQLDB;

?>