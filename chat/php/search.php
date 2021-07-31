<?php
session_start();
include_once "config.php";
$searchterm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
$output = "";
if ($searchterm == "") {
    $sql = mysqli_query($conn, "SELECT * FROM users where unique_id != {$_SESSION['unique_id']}");
} else {
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id != {$_SESSION['unique_id']} and fname LIKE '%{$searchterm}%' OR lname LIKE '%{$searchterm}%'");
}
if (mysqli_num_rows($sql) > 0) {
    include "data.php";
} else {
    $output .= "NO USER FOUND";
}
echo $output;