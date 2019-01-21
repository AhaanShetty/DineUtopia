<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: http://easydine.000webhostapp.com/");
   }
?>