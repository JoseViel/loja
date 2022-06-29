<?php

    session_start();
    
    unset($_SESSION['email']);
    unset($_SESSION['senha']); 

    Header("location: choose.php"); 
?>