<?php 
    require_once("db_connect.php");

    $id = $_POST['id'];
    $name = $_POST['accountName'];
    $balance = $_POST['balance'];
    $accountType = $_POST['accountType'];

    $sqlCommand = "UPDATE `bank_account` SET `account_name`='$name',`balance`=$balance,`acc_type`=$accountType WHERE account_id = $id";

    $result = mysqli_query($connect, $sqlCommand);

    header("location:./index.php");
    
    
?>