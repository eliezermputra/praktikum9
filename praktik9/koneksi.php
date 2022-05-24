<?php
$host="localhost";
$username="root";
$password="";
mysql_connect($host, $username, $password) or die("Koneksi gagal dibangun");
mysql_select_db("situspersonal") or die("Database tidak dapat dibuka");