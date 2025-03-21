<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "av_vadapav";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die("NOT Connected");
}
