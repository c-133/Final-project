<?php
define("DB_SERVER", "127.0.0.1:3306");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "hospital");

$con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

if($con == false){
    echo "connection not done";
}
?>