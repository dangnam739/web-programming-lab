<html>
<head><title>Product Update Results</title></head>

<body>
<?php
$server = 'localhost';
$user = 'dangnam739';
$pass = '123456';
$my_db = 'lab06';
$table_name = 'Products';
$connect = mysqli_connect($server, $user, $pass);
$Product = $_POST["product_name"];

print '<font size="5" color="blue">';
print "Update Results for Table $table_name</font><br>\n";
$query = "UPDATE $table_name SET Numb = Numb-1
                            WHERE (Product_desc = \"$Product\")";
print "The query is <i> $query </i> <br><br>\n";
mysqli_select_db($connect, $my_db);

$results_id = mysqli_query($connect, $query);
if ($results_id){
    Show_all($connect, $my_db, $table_name);
} else {
    print "Update = $query failed";
}
mysqli_close($connect);

function Show_all($connect, $database, $table_name){
    $query = "SELECT * from $table_name";
    $results_id = mysqli_query($connect, $query);
    print '<table border=1><th> Num </th>
    <th>Product</th><th>Cost</th>
    <th>Weight</th><th>Count</th>';
    while ($row = mysqli_fetch_row($results_id)) {
        print '<tr>';
        foreach ($row as $field){
            print "<td>$field</td> ";
        }
        print '</tr>';
    }
}
?>
</body></html>

