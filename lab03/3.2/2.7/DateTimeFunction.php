<html>
<head><title>Date Time</title></head>
<body>
<font size=5 color="blue">Date Time Function</font>
<br>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <?php
    if(array_key_exists("name_1", $_GET)) {
        $name_1 = $_GET["name_1"];
        $date_1 = $_GET["date_1"];
        $name_2 = $_GET["name_2"];
        $date_2 = $_GET["date_2"];
    }else{
        $name_1 = "";
        $date_1 = "";
        $name_2 = "";
        $date_2 = "";
    }
    ?>
    <table>
        <tr>
            <td style="font-weight: bold; font-size: large">First person</td>
        </tr>

        <tr>
            <td>Name: </td>
            <td><input type="text" size="15" maxlength="30" name="name_1" value="<?php if (isset($_GET['name_1'])) echo $_GET['name_1']; ?>"/></td>
        </tr>

        <tr>
            <td>Birthday (dd/mm/yyyy): </td>
            <td><input type="text" size="15" maxlength="30" name="date_1" value="<?php if (isset($_GET['date_1'])) echo $_GET['date_1']; ?>"/></td>
        </tr>

        <tr>
            <td style="font-weight: bold; font-size: large">Second person</td>
        </tr>

        <tr>
            <td>Name: </td>
            <td><input type="text" size="15" maxlength="30" name="name_2" value="<?php if (isset($_GET['name_2'])) echo $_GET['name_2']; ?>"/></td>
        </tr>

        <tr>
            <td>Birthday (dd/mm/yyyy): </td>
            <td><input type="text" size="15" maxlength="30" name="date_2" value="<?php if (isset($_GET['date_2'])) echo $_GET['date_2']; ?>"/></td>
        </tr>

        <br><br>
        <tr>
            <td align="right"><input type="submit" value="Submit"></td>
            <td align="light"><input type="reset" value="Reset"></td>
        </tr>
    </table>


    <?php
    function validate($date){
        $tmp = str_replace('/', '-', $date);
        $new_date = date('d-m-Y', strtotime($tmp));
        return $new_date;
    }

    function compareAge($date1, $date2){
        $year1 = date('Y', $date1);
        $year2 = date('Y', $date2);
        return $year1 - $year2;
    }

    if(array_key_exists("name_1", $_GET)){
        print ("<br>==================================");
        print "<br>Person 1:";
        $new_date1 = validate($date_1);
        print "<br>Name is <b>$name_1</b>, Birthday is <b>$new_date1</b>";
        print ("<br>==================================");
        print "<br>Person 2:";
        $new_date2 = validate($date_2);
        print "<br>Name is <b>$name_2</b>, Birthday is <b>$new_date2</b>";

        print ("<br>==================================");
        $a = compareAge($new_date1, $new_date2);
        if($a > 0){
            print "<br>$name_1 is greater than $name_2 $a years old.";
        }elseif (a < 0){
            $a = -$a;
            print "<br>$name_1 is less than $name_2 $a years old.";
        }else{
            print "<br>$name_1 and $name_2 are same years old.";
        }
    }
    ?>

</body>
</html>