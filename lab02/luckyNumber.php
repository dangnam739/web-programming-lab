<html lang="en">

<head>
    <title> Coin Flip Results </title>
</head>

<body>
    <?php
        srand ((double) microtime() * 10000000);
        $number = $_POST["number"];
        $money = $_POST["money"];
        $luck_num = rand( 0, 99 );
        if ( $number ==  $luck_num ) {
            print "The lucky number = $luck_num<br> ";
            print '<font color="blue"> You got $money VND!</font>';
        }
        else {
            print "<h1 style='color: blue; font-weight: bold;'>Good luck later! :((</h1>Lucky number is $luck_num";
        }
    ?>
</body>
</html>
