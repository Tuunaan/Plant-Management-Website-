<?php
include('connect.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buyerid = mysqli_real_escape_string($conn, $_POST['buyerid']);
    $sellerid = mysqli_real_escape_string($conn, $_POST['sellerid']);
    $plantid = mysqli_real_escape_string($conn, $_POST['plantid']);
    $transaction_type = mysqli_real_escape_string($conn, $_POST['transaction_type']);
    $transaction_date_time = mysqli_real_escape_string($conn, $_POST['transaction_date_time']);
    $payment_method = mysqli_real_escape_string($conn, $_POST['payment_method']);

    $sql = "INSERT INTO 'transaction' (buyerid, sellerid, plantid, transaction_type, transaction_date_time,
    payment_method) VALUES ($buyerid, $sellerid, $plantid, '$transaction_type',  $transaction_date_time, '$payment_method')";
    
    $sql1 = "SELECT * FROM user_info WHERE UserID = '$buyerid'";
        $result = mysqli_query($conn,$select);

        if (mysqli_num_rows($result)>0) {
            echo 'Transaction Approved';
        } else {
            echo 'Invalid BuyerID';
        }
    }
$conn->close();
?>


    