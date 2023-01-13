<?php
include_once 'Connection.class.php';
try
{
     $database = new Connection();
     $db = $database->Connect();
     // sql to create table
     $sql = "CREATE TABLE `Student` ( `ID` INT NOT NULL AUTO_INCREMENT , `name`VARCHAR(40) NOT NULL , `last_name` VARCHAR(40) NOT NULL , `email` VARCHAR(40)NOT NULL , PRIMARY KEY (`ID`)) ";
     // use exec() because no results are returned
     $db->exec($sql);
     echo "Table Student created successfully";
     $database->Connect();
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}
?>