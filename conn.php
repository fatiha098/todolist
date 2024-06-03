<?php 

  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbName = 'todolist';

  $conn = mysqli_connect($servername, $username, $password, $dbName );

  if(!$conn){
    die('Erreur : '.mysqli_connect_error());
  }



    // try {

    //   $conn = new PDO("mysql:host=localhost; dbName=todolist";$username,$password);

    // }catch(PDOException $e){
    //   die('Error : ' $e->getMesage())
    // }

?>