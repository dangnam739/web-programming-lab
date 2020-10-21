<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "weblab";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<html>
<head><title>Business listing</title></head>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
<body>
<h2>Business Listings</h2>
<div style="width: 30%; float: left">
    <p><b>Click on a category to find business listing</b></p>
    <?php
    $sql = "SELECT *FROM category";
    $result = $conn->query($sql);
    $link = "";
    while ($row = $result->fetch_assoc()) {
        $link = "Exerecise3.php?cat_id={$row["id"]}";
        echo "<a href='$link'>" . $row["cat_name"] . "</a><br/>";
    }
    ?>
</div>
<div>
    <table>

        <?php
        $cat_id = $_GET["cat_id"];
        $sql = "SELECT *FROM business JOIN bus_cat ON business.id = bus_cat.bus_id WHERE bus_cat.cat_id=$cat_id";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>". $row['id']."</td>";
                echo "<td>". $row['name']."</td>";
                echo "<td>". $row['address']."</td>";
                echo "<td>". $row['city']."</td>";
                echo "<td>". $row['phone']."</td>";
                echo "<td>". $row['url']."</td>";
                echo "</tr>";
            }
        }

        ?>
    </table>
</div>
</body>
</html>