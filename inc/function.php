<?php
// Set waktu
date_default_timezone_set('Asia/Jakarta');
$tgl = date('Y-m-d H:i:s');

//Koneksi Database
$HOSTNAME = "localhost";
$DATABASE = "db_apartement_fix";
$USERNAME = "root";
$PASSWORD = "";



$KONEKSI = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);


?>