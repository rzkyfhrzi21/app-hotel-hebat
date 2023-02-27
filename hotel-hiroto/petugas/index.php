<?php
session_start();

if ($_SESSION['level'] == 'admin') {
    header('location: admin.php');
} else if ($_SESSION['level'] == 'resepsionis') {
    header('location: resepsionis.php');
} else {
    header('location: ../login.php');
}
