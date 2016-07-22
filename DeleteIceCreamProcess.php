<?php

// DB connection info
include 'DatabaseCredentials.php';

// Connect to database.
try {
    $conn = new PDO( "mysql:host=$hostname;dbname=$databasename", $username, $password);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    $icecream_id_db = $_POST['icecream_id_db'];
    $sql_delete = "DELETE FROM Table_Project_IceCream WHERE icecream_id_db='$icecream_id_db'";
    $conn->exec($sql_delete);
}
catch(Exception $e){
    die(var_dump($e));
}

$conn = null;


$url = 'http://' . $_SERVER['HTTP_HOST'];            // Get the server
$url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); // Get the current directory
$url .= '/ListIceCream.php';            // <-- Your relative path
header('Location: ' . $url, true, 302);              // Use either 301 or 302
