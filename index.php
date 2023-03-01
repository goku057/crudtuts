<?php
require_once("db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    $sqlCommand = "SELECT account_id, account_name, balance, acc_type, account_type_name FROM `bank_account` JOIN account_type ON bank_account.acc_type = account_type.id WHERE 1";
    $result = mysqli_query($connect, $sqlCommand);

    ?>
    <table id="customers">
        <tr>
            <th>Account iD</th>
            <th>Account name</th>
            <th>Account balance</th>
            <th>accountType id</th>
            <th>accountType name</th>
        </tr>
        <?php
        while($row = mysqli_fetch_assoc($result)){
        
        ?>
        <tr>
            <td><?php echo $row['account_id'] ?></td>
            <td><?php echo $row['account_name'] ?></td>
            <td><?php echo $row['balance'] ?></td>
            <td><?php echo $row['acc_type'] ?></td>
            <td><?php echo $row['account_type_name'] ?></td>
        </tr>
        
        <?php 
            }
        ?>
    </table>

    <a href="./createaccount.php">Create Account</a>
</body>

</html>