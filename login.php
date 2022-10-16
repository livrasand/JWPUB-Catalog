<?php

   $user = $_GET['id_del_editor'];
   header("Location: ./users/".$user.".html");
   exit();
?>