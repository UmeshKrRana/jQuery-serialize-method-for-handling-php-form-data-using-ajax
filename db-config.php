<?php
    $hostname           =       "localhost";
    $username           =       "root";
    $password           =       "root";
    $dbname             =       "phpAjaxDemo";

    $conn               =        mysqli_connect($hostname, $username, $password, $dbname) 
                                 or die("Database connection failed.");
?>