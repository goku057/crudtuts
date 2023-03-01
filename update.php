<?php

    require_once("db_connect.php");

    $id = $_GET['id'];
    $sqlCommand = "SELECT account_id, account_name, balance, acc_type FROM `bank_account` WHERE account_id = $id";

    $result = mysqli_query($connect, $sqlCommand);
    $row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./updateaccount.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['account_id']?>">
        name: <input type="text" name="accountName" value="<?php echo $row['account_name']?>"> <br>
        balance: <input type="text" name="balance" value="<?php echo $row['balance']?>"> <br>
        account Type: <input type="text" name="accountType" value="<?php echo $row['acc_type']?>"> <br>
        <button type="submit">Update</button>
    </form>
</body>

</html>