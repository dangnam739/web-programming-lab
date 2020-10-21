<html>
<head><title>Insert Table</title></head>
<body>
    <?php
    $server = 'localhost';
    $user = 'dangnam739';
    $pass = '123456';
    $my_db = 'lab06';
    $table_name = 'Products';
    $connect = mysqli_connect($server, $user, $pass);

    $product_desc = $_POST["product_desc"];
    $cost = $_POST["cost"];
    $weight = $_POST["weight"];
    $numb = $_POST["numb"];
    if (!$connect) {
        die ("Cannot connect to $server using $user");
    } else {
        $SQLcmd = "INSERT INTO $table_name (Product_desc, Cost, Weight, Numb)
                   VALUES (\"$product_desc\", $cost, $weight, $numb)";

        mysqli_select_db($connect, $my_db);

        print "The Query is: $SQLcmd <br />";
        if (mysqli_query($connect, $SQLcmd)){
            print "Insert into table $table_name was successful !\n";
        } else {
            die ("Insert into table failed\n");
        }
        mysqli_close($connect);
    }
    ?>
</body>
</html>