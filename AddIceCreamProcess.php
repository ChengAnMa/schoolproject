<?php

// DB connection info
include 'DatabaseCredentials.php';

// Connect to database.

 try {

    $conn = new PDO( "mysql:host=$hostname;dbname=$databasename", $username, $password);

    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    $icecream_name = $_POST['icecream_name'];
    $icecream_base_id_db = $_POST['icecream_base_id_db'];
    $icecream_addin_id_db = $_POST['icecream_addin_id_db'];
    $icecream_date_created = date("Y-m-d");

    $sql_insert = "INSERT INTO Table_Project_IceCream (icecream_name, icecream_base_id_db, icecream_addin_id_db, icecream_date_created) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql_insert);
    $stmt->bindValue(1, $icecream_name);
    $stmt->bindValue(2, $icecream_base_id_db);
    $stmt->bindValue(3, $icecream_addin_id_db);
    $stmt->bindValue(4, $icecream_date_created);
    $stmt->execute();


}
catch(Exception $e){
    die(var_dump($e));
}

$conn = null;



$url = 'http://' . $_SERVER['HTTP_HOST'];            // Get the server
$url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); // Get the current directory
$url .= '/ListIceCream.php';            // <-- Your relative path
header('Location: ' . $url, true, 302);              // Use either 301 or 302

