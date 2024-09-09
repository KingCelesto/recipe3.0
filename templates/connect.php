<?php
$hostname="localhost";
$username="KingCelesto";
$password="1357";
$database="recipe_db";
$db_con=mysqli_connect($hostname, $username, $password, $database);

if ($db_con) {
    
}
else {
    echo "False";
}
?>