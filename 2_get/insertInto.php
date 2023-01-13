<?php
include_once 'Connection.class.php';
try
{
    $database = new Connection();
    $db = $database->Connect();
    // inserting data into create table using prepare statement to prevent from sql injections
    $stmt = $db->prepare("INSERT INTO student (ID,name,last_name,email) VALUES ( :id, :name, :lastname, :email)") ;
    // inserting a record
    $stmt->execute(array(':id' => 0 , ':name' => 'Saquib' , ':lastname' => 'Rizwan' , ':email' => 'saquib.rizwan@cloudways.com'));
    echo "New record created successfully";
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}
?>