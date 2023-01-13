<?php
include_once 'Connection.class.php';
try
{
    $database = new Connection();
    $db = $database->Connect();
    $sql = "SELECT * FROM student " ;
    foreach ($db->query($sql) as $row) {
    echo " ID: ".$row['id'] . "<br>";
    echo " Name: ".$row['first_name'] . "<br>";
    echo " Last Name: ".$row['last_name'] . "<br>";
    echo " Email: ".$row['email'] . "<br>";
    }
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}
?>