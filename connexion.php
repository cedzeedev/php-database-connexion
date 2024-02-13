<?php
  $servername = "";
  $username = "";
  $password = "";
  $dbname = "";

  $conn = new msqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  //Insert your code


  //Do not forgot close connexion:
  $conn->close();
  //By CEDZEE (https://github.com/cedzeedev)
?>
