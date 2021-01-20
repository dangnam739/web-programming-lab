<html>
<head><title>Create Table</title></head>
<body>
<?php
$server = 'localhost';
$user = 'dangnam739';
$pass = '123456';
$my_db = 'lab06';
$table_name = 'users';

$connect = mysqli_connect($server, $user, $pass);
if (!$connect) {
    die ("Cannot connect to $server using $user");
} else {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $sql = "SELECT * FROM $table_name WHERE username='" . $_POST['username'] . "' AND password = '" . $_POST['password'] . "'";
        mysqli_select_db($connect, $my_db);
        if ($result = mysqli_query($connect, $sql)) {
            if ($result->num_rows > 0)
                print '<font size="4" color="blue" >Login Success ';
            else
                print '<font size="4" color="blue" >No user';
            print "<br>SQLcmd=$sql";
        } else {
            die ("Select Query Failed SQLcmd=$sql");
        }
        mysqli_close($connect);

    }
}
?>
</body>
</html>