<html>
<head><title>Business Listing</title></head>

<body>
<h1>Business Listings</h1>
    <div style="float: left; width: 30%">
        <table border="1px">
            <tr>
                <th>Click on a category to find business listings: </th>
            </tr>
            <?php
            $server = "localhost";
            $username = "dangnam739";
            $password = "123456";
            $my_db = "lab06";

            // Create connection
            $conn = mysqli_connect($server, $username, $password, $my_db);
            // Check connection

            $table_name = 'categories';

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $SQLcmd = "SELECT * FROM $table_name";
            $result = mysqli_query($conn, $SQLcmd);
            $link="";
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $link = "Business_Listing.php?cat_id={$row["cat_id"]}";
                    print "<tr><td><a href='$link'>".$row["title"] . "</a></td></tr>";
                }
            }
            ?>
        </table>
    </div>
        <table>
            <?php
            $cat_id = $_GET["cat_id"];
            $query = "SELECT * FROM businesses JOIN biz_categories ON businesses.business_id = biz_categories.business_id
                      WHERE biz_categories.cat_id = '$cat_id'";
            $result = $conn->query($query);
            if($result){
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>". $row['business_id']."</td>";
                    echo "<td>". $row['business_name']."</td>";
                    echo "<td>". $row['address']."</td>";
                    echo "<td>". $row['city']."</td>";
                    echo "<td>". $row['telephone']."</td>";
                    echo "<td>". $row['url']."</td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>

    <div>

    </div>
</body>
</html>