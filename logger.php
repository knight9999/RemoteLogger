<?php

  require("config.php");

  $message = $_POST["message"];
  $date = "";
  if (isset($_POST["date"])) {
    $date = $_POST["date"];
  };

  file_put_contents( $log_file , $message . "\n" , FILE_APPEND );
  


?>


