<?php

  // We should use session_start() whenever we use session
      session_start();

  // Add the student data to the session Array using built in super global $_SESSION
  // and push all the new students into that array
      $students['firstname'] = $_POST['firstname'];
      $students['lastname'] = $_POST['lastname'];
      $students['batch'] = $_POST['batch'];

      array_push($_SESSION['students'], $students);

  // echo can only do strings
  // since we will check the array we should use var_dump
      // var_dump($_SESSION['students']);

  // header('Location: xxx') is like navigate() in react you can go to different pages
      header('Location: index.php')

?>
