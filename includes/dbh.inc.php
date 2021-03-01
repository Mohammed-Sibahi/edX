<?php

$servername = "localhost";

$dBUsername = "root";

$dBPassword = "";

$dBname = "edx";


$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBname);

if (!$conn) {

    die("connection failed: " . mysqli_connect_error());

}

