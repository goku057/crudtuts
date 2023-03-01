<?php 
    require_once("db_connect.php");

    $id = $_GET['id'];

    $sqlCommand = "DELETE FROM `bank_account` WHERE account_id = $id";
    $result = mysqli_query($connect, $sqlCommand);

    header("location:./index.php");
    
    
?>