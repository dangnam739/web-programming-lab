<html>
<head><title>Display list of products</title></head>
<body>
    <?php
    $server = 'localhost';
    $user = 'dangnam739';
    $pass = '123456';
    $my_db = 'lab06';
    $table_name = 'Products';
    $connect = mysqli_connect($server, $user, $pass);

    print '<font size="4" color="blue" >Product Data</font><br /> ';

    if (!$connect) {
        die ("Cannot connect to $server using $user");
    } else {
        $SQLcmd = "SELECT * FROM $table_name";
        mysqli_select_db($connect, $my_db);

        print "The Query is <b>$SQLcmd </b><br />";
        $result = mysqli_query($connect, $SQLcmd);
        if ($result->num_rows > 0 ){
            $list_products = [];
            print '<table border=1>';
            while ($row = $result->fetch_assoc()){
                print '<tr>';
                foreach ($row as $field) {
                    print "<td>$field</td> ";

                }
                print '</tr>';
            }
            print '</table>';

//            while($row = $result->fetch_assoc()){
//                $item = array();
//                $item["ProductID"] = $row["ProductID"];
//                $item["Product_desc"] = $row["Product_desc"];
//                $item["Cost"] = $row["Cost"];
//                $item["Weight"] = $row["Weight"];
//                $item["Numb"] = $row["Numb"];
//
//                $list_products[] = $item;
//            }

//            if (count($list_products) > 0){
//                print "<table border='1px'><tr>";
//                print "<td>Product ID</td><td>Product</td><td>Cost</td><td>Weight</td><td>Count</td></tr>";
//
//                foreach ($list_products as $product){
//                    print "<tr>";
//                    print "<td>".$product["ProductID"]."</td>";
//                    print "<td>".$product["Product_desc"]."</td>";
//                    print "<td>".$product["Cost"]."</td>";
//                    print "<td>".$product["Weight"]."</td>";
//                    print "<td>".$product["Numb"]."</td>";
//                    print "</tr>";
//                }
//            }
        } else {
            die ("Display table failed\n");
        }
        mysqli_close($connect);
    }
    ?>


</body>
</html>