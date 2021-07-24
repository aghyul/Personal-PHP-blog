<?php
/* 
# By zeldauS
# Made with Mind and a lot of coffee :D
*/
session_start();
if (!isset($_SESSION['username'])) {
    header("location: index.php");
} else {
    session_destroy();
    header("location: login.php");
}
