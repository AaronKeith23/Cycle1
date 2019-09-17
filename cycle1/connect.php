<?php
$custname = filter_input(INPUT_POST, 'custname');
$dishname = filter_input(INPUT_POST, 'dishname');
$quantity = filter_input(INPUT_POST, 'quantity');
if (!empty($username)){
    if (!empty($password)){
        $host = "jbc:mysql:/localhost:3306/orderdata";
        $dbusername = "root";
        $dbpassword = "Bmoreballer23";
        $dbname = "orderdata";
// Create connection
        $conn = new mysql ($host, $dbusername, $dbpassword, $dbname);
        if (mysql_connect_error()){
            die('Connect Error ('. mysql_connect_errno() .') '
                . mysql_connect_error());
        }
        else{
            $sql = "INSERT INTO CUSTOMER ((id : int, custname: varchar, dishname: varchar, quantity: int))values ('$custname','$dishname','$quantity')";
            if ($conn->query($sql)){
                echo "Your order has been placed";
            }
            else{
                echo "Error: ". $sql ."
". $conn->error;
            }
            $conn->close();
        }
    }
    else{
        echo "Password should not be empty";
        die();
    }
}
else{
    echo "Username should not be empty";
    die();
}
?>