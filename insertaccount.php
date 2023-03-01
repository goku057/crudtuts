<?php 
    require_once("db_connect.php");

    $name = $_POST['accountName'];
    $balance = $_POST['balance'];
    $accountType = $_POST['accountType'];

    $sqlCommand = "INSERT INTO bank_account (account_name, balance, acc_type) VALUES('$name', $balance, $accountType)";

    $result = mysqli_query($connect, $sqlCommand);

    header("location:./index.php");
    
    
?>