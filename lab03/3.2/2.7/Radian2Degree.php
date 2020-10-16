<html>
<head><title>Radian to Degree</title></head>
<body>
    <font size=5 color="blue">Convert Radians to Degrees</font>
    <br><br>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <?php
            if(array_key_exists("radian", $_GET)) {
                $radian = $_GET["radian"];
            }else{
                $radian = 0;
            }
        ?>
        Enter radian:
        <input type="text" size="15" maxlength="30" name="radian" value="<?php if (isset($_GET['radian'])) echo $_GET['radian']; ?>"/>
        <br><br>
        <td align="right"><input type="submit" value="Submit"></td>
        <td align="light"><input type="reset" value="Reset"></td>
        <br>
        <?php
            function R2D($radian){
                return $radian*180/3.14;
            }
            if(array_key_exists("radian", $_GET)){
                if(is_numeric($radian)){
                    $degree = R2D($radian);
                    print "<br>The degrees of $radian radian is $degree <br>";
                }
                else{
                    print "<br>You must enter a number";
                }
            }
        ?>
</body>
</html>