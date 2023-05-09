<?php
    //Connect to the database 
    $dsn ='mysql:host=localhost;dbname=todolist';
    $username = 'root';
    //Try connecting to the database and exit if there is an issue
    try
    {
        $db = new PDO($dsn, $username);
    }
    catch (PDOException $e)
    {
        //Concat an error message to echo to the console if there is a database error and exit
        $error = "Database Error: ";
        $error .= $e ->getMessage();
        $_SESSION['error'] = $error;
        //Display the error
        require('../view/database_error.php');
        exit();
    }
?>