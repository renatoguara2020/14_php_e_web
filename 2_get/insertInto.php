<?php

include_once 'Connection.class.php';
try{
    $database = new Connection();
    $db = $database->Connect();
    // inserting data into create table using prepare statement to prevent from sql injections
    $stmt = $db->prepare("INSERT INTO student (first_name,last_name,email) VALUES ( :first_name, :last_name, :email)");
    // inserting a record
    $stmt->bindValue(':first_name', $first_name, PDO::PARAM_STR);
    $stmt->execute();
    echo "New record created successfully";
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}
?>