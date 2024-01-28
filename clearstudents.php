<?php

  session_start();

  //clear session
      unset($_SESSION['students']);
      
      $_SESSION['students'] = array();

      header('Location: index.php');
?>