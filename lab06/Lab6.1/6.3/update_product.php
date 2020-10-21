<html>
<hed><title>Display list of products</title></hed>
<body>
<?php
$server = 'localhost';
$user = 'dangnam739';
$pass = '123456';
$my_db = 'lab06';
$table_name = 'Products';
$connect = mysqli_connect($server, $user, $pass);

if (!$connect) {
    die ("Cannot connect to $server using $user");
} else {
    $SQLcmd = "SELECT * FROM $table_name";
    mysqli_select_db($connect, $my_db);
    $result = mysqli_query($connect, $SQLcmd);
    if ($result){
        $list_products = [];

        while($row = $result->fetch_assoc()){
            $item = array();
            $item["ProductID"] = $row["ProductID"];
            $item["Product_desc"] = $row["Product_desc"];
            $item["Cost"] = $row["Cost"];
            $item["Weight"] = $row["Weight"];
            $item["Numb"] = $row["Numb"];

            $list_products[] = $item;
        }

        if (count($list_products) > 0){
            print '<font size="6" color="blue" >Select Product We Just Sold</font><br /> ';
            print "<form action=\"update.php\" method=\"POST\">";
            foreach ($list_products as $product){
                $prd_name = $product["Product_desc"];
                print "<input type=\"radio\" name=\"product_name\" value=\"$prd_name\">$prd_name  ";
            }
            print "<br/>";
            print "<input type=\"submit\" value=\"Submit\">";
            print "<input type=\"reset\" value=\"Reset\"><br><br>";
            print "</form>";

            print "<table border='1px'><tr>";
            print "<td>Product ID</td><td>Product</td><td>Cost</td><td>Weight</td><td>Count</td></tr>";

            foreach ($list_products as $product){
                print "<tr>";
                print "<td>".$product["ProductID"]."</td>";
                print "<td>".$product["Product_desc"]."</td>";
                print "<td>".$product["Cost"]."</td>";
                print "<td>".$product["Weight"]."</td>";
                print "<td>".$product["Numb"]."</td>";
                print "</tr>";
            }
        }
        else{
            print "Empty set \n";
        }

    } else {
        die ("Insert into table failed\n");
    }
    mysqli_close($connect);
}
?>


</body>
</html>