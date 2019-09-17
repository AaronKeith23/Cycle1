<?php
//Connecting to MySQL
try{
    $host="mysql:host=localhost;dbname=csci22501fa18";
    $user_name="csci22501fa18";
    $pwd="csci22501fa18!";
    $database_name="customer";
 //   $conn = new mysql($host, $user_name, $pwd);
    $pdo = new PDO($host, $user_name, $pwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Check connection
//if ($conn->connect_error) {
 //   die("Connection failed: " . $conn->connect_error);
}
    catch (PDOException $e)
    {
        die($e->getMessage() );
    }
//echo "Connected successfully";
//Storing form values into PHP variables
$custname = $_POST["custname"]; // Since method=”post” in the form
$custdish = $_POST["dishname"];
$quantity = $_POST["quantity"];
//Inserting these values into the MySQL table
//we created above
$sql = "INSERT INTO customer (custname, dishname, quantity)VALUES (:custname , :dishname , :quantity )";

//if ($conn->query($sql) === TRUE) {
  //  echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}

//$conn->close();
?>
<head>
    <title> Aaron's Online Catering </title>
    <style>
        #dish img{ max-width: 50%; }

        @media only screen and (max-width: 350px) {
            #main img {max-width: 100%; }
    </style>
    <meta charset="utf-8"

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1" >

    <link  rel="stylesheet" href="design.css" >
</head>
<body>
<header>
    <img src="images/cafe.jpg" alt="Cafe" class="center">
    <h1><center> Ordering Page </h1>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"
            <a class="navbar-brand" href="#"><center>Navigation</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="index.html">Home Page</a></li>
                <li><a href="breakfast.html">Breakfast</a></li>
                <li><a href="lunch.html">Lunch</a></li>
                <li><a href="dinner.html">Dinner</a></li>
                <li><a href="dessert.html">Dessert</a></li>
            </ul>
    </nav>
</header>
<div>
    <table class="table table-striped">
        <caption> Ordering Menu </caption>

        <thead>
        <tr>
            <th> Dish Name </th>
            <th> Price </th>

        <tbody>
        <td> Cinnamon Pancakes </td>
        <td> $8.55 </td>
        </tbody>

        <tbody>
        <td> Scrambled Eggs </td>
        <td> $4.95 </td>
        </tbody>

        <tbody>
        <td> Turkey Club </td>
        <td> $6.75 </td>
        </tbody>

        <tbody>
        <td> CheeseBurger </td>
        <td> $8.25 </td>
        </tbody>

        <tbody>
        <td> 12 oz Steak </td>
        <td> $19.55 </td>
        </tbody>

        <tbody>
        <td> Aaron's Famous Chicken </td>
        <td> $12.99 </td>
        </tbody>

        <tbody>
        <td> Bacon Cheese Fries </td>
        <td> $3.99 </td>
        </tbody>

        <tbody>
        <td> Loaded Cheese Nachos </td>
        <td> $4.99  </td>
        </tbody>
        <form>
            <form name="orderform" method="post" action="order.php">
                <p><label>Enter Customer Name: </label><input type="text" name="custname" id="custname" /></p>
                <p><label>Enter Food Dish: </label><input type="text" name="dishname" id="dishname" /></p>
                <p><label>Enter Quantity </label><input type="text" name="quantity" id="quantity" /></p>
                <p><input type="submit" name="s1" id=”s1″ value=”Submit” /></p>
            </form>



            <footer>
                Aaron Keith &copy
            </footer>