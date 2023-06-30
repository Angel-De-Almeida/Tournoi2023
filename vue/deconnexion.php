<?php
    session_start(); // ouverture de la session 
    session_destroy(); // on la detruit
    header("location:http://172.16.255.24/~tournoi2023/Tournoi2023/"); // redirection
?>