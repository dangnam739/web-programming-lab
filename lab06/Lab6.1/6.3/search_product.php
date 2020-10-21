<html>
<head><title>Search Product</title></head>
<body>
<?php
$server = 'localhost';
$user = 'dangnam739';
$pass = '123456';
$my_db = 'lab06';
$table_name = 'Products';
$connect = mysqli_connect($server, $user, $pass);

$product_name = $_POST["product_name"];
if (!$connect) {
    die ("Cannot connect to $server using $user");
} else {
    $SQLcmd = "SELECT * FROM $table_name
                        WHERE(Product_desc = \"$product_name\")";
    print '<font size="4" color="blue" >Product Data</font><br /> ';
    print "The Query is <b>$SQLcmd </b><br />";

    mysqli_select_db($connect, $my_db);
    $result = mysqli_query($connect, $SQLcmd);

    if ($result) {
        $list_products = [];

        while ($row = $result->fetch_assoc()) {
            $item = array();
            $item["ProductID"] = $row["ProductID"];
            $item["Product_desc"] = $row["Product_desc"];
            $item["Cost"] = $row["Cost"];
            $item["Weight"] = $row["Weight"];
            $item["Numb"] = $row["Numb"];

            $list_products[] = $item;
        }

        if (count($list_products) > 0) {
            print "<table border='1px'><tr>";
            print "<td>Product ID</td><td>Product</td><td>Cost</td><td>Weight</td><td>Count</td></tr>";

            foreach ($list_products as $product) {
                print "<tr>";
                print "<td>" . $product["ProductID"] . "</td>";
                print "<td>" . $product["Product_desc"] . "</td>";
                print "<td>" . $product["Cost"] . "</td>";
                print "<td>" . $product["Weight"] . "</td>";
                print "<td>" . $product["Numb"] . "</td>";
                print "</tr>";
            }
        } else {
            print "No product $product_name\n";
        }

    } else {
        die ("Search product failed\n");
    }
    mysqli_close($connect);
}
?>
</body></html>


