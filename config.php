<?php
    define('HOST', 'localhost');
    define('PORT', 3306);
    define('USER', 'root');
    define('PASS', '');
 
    $conn = new mysqli(HOST, USER, PASS, 'biblioteca');

    function alert(string $message): void {
        echo '<script> alert("'. $message .'")</script>';
    }
    
    function redirect(string $url): void {
        echo "<script> location.href = '$url'; </script>";
    }
?>