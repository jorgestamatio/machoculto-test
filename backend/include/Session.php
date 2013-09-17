<?php
date_default_timezone_set('Europe/Berlin');
/**
 * Session.php
 * 
 * The session takes care of checking logged in users.
 */

class Session {

   var $username;     //Username given on sign-up
   var $isLogged;    //True if user is logged in, false otherwise


   /* Class constructor */
   function __construct(){
      $this->startSession();
   }

  
   function startSession(){
      global $database;  //The database connection
      session_start();   //Tell PHP to start the session
      $this->isLogged = $this->checkLogin();

   }

   /**
    * checkLogin - Checks if the user has already previously
    * logged in, and a session with the username has already been
    * established. 
    */
   function checkLogin(){
      global $database;  //The database connection

      /* Username and userid have been set and not guest */
      if(isset($_SESSION['username'])){
         return true;
      }
      /* User not logged in */
      else{
         return false;
      }
   }

   /**
    * login - The user has submitted his username and password
    * through the login form, this function checks the authenticity
    * of that information in the database and creates the session.
    * Effectively logging in the user if all goes well.
    */
   function login($user, $pass){
      global $database;  //The database object

      /* Checks that username is in database and password is correct */
      $result = $database->confirmUserPass($user, md5($pass));


      if($result){
      	$_SESSION['username'] = $user;
      	return true;
      }else{
      	return false;
      }
      
      
   }

   /**
    * logout - Gets called when the user wants to be logged out of the
    * website. It deletes the session variable username. Redirects to login.php
    */
   function logout(){
      global $database;  //The database connection


      /* Unset PHP session variables */
      unset($_SESSION['username']);

      /* Reflect fact that user has logged out */
      $this->isLogged = false;
      header("Location: login.php");
   }

   




};


/**
 * Initialize session object - This must be initialized before
 * the form object because the form uses session variables,
 * which cannot be accessed unless the session has started.
 */
$session = new Session;



?>
