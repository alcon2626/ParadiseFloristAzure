<?php
   session_start();
   
   if(session_destroy()) {
     ob_start();
     header("Location: index.php");
     ob_end_flush();
     flush();
   }
?>