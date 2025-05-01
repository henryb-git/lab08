<?php
session_start();

include 'header.inc';

if(isset($_SESSION['user'])) {
    echo "<h1>Welcome, " .htmlspecialchars($_SESSION['user']);
} else {
    echo "Location: login.html";
}

include 'footer.inc';
?>