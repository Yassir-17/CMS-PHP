<?php

define("HOSTNAME", "localhost");
define("HOST_USER", "yassir");
define("HOST_PASS", "AdminY");
define("DB_NAME", "CMS");

$conn = mysqli_connect(HOSTNAME,HOST_USER,HOST_PASS,DB_NAME);
if(!$conn) {
    die("Connection faild!:". mysqli_connect_error() .".Error No: ". mysqli_connect_errno());
} else {
    // echo "connected";
}

?>