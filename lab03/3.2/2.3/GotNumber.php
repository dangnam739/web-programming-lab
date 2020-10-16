<html lang="en">

<head>
    <title>Gess Number Results </title>
</head>

<body>
<?php
srand ((double) microtime() * 10000000);
$number = $_POST["number"];
$luck_num = rand( 0, 99 );
if(is_numeric($number)){
    if ( $number <  $luck_num ) {
        print '<font color="blue"> You got it right!</font>';
    }
    elseif ($number > $luck_num){
        print '<font color="red">Wrong. Please try a
        lower number. You have guessed 1 time!</font>';
    }
}else{
    print "You must enter a number!";
}
?>
</body>
</html>