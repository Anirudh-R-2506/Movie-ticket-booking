<?php
session_start();
include "Database.php";
if($_POST['movie'] != '' && $_POST['time'] != '' && $_POST['seats'] != ''){
	$movie = mysqli_real_escape_string($conn,$_POST['movie']);
	$time = mysqli_real_escape_string($conn,$_POST['time']);
	$seats = explode(',', $_POST['seats']);
    foreach($seats as $s){
        mysqli_query($conn,"DELETE FROM seat_lock WHERE movie = '$movie' AND show_time = '$time' AND seat = '$s'");
    }
}
?>