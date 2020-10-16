<html lang="en">
<head><title>Date Time</title></head>
<body>
<h1 style="color: blue">Date Time</h1>
<p>Enter your name and select dât and time for the appointment</p>
<br>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <?php
        if(array_key_exists("name", $_GET)) {
            $name = $_GET["name"];
            $day = $_GET["day"];
            $month = $_GET["month"];
            $year = $_GET["year"];
            $hour = $_GET["hour"];
            $minute = $_GET["minute"];
            $second = $_GET["second"];
        }else{
            $name = "";$day = 0;$month = 0;$year = 0;$hour = 0;$minute = 0;$second = 0;
        }
    ?>
    <table>
        <!--Name-->
        <tr>
            <td>Your Name: </td>
            <td>
                <input type="text" size="15" maxlength="30" name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>"/>
            </td>
        </tr>

        <!--Date-->
        <tr>
            <td>Date: </td>
            <td>
                <select name="day">
                    <?php
                        for($i=1; $i<=31; $i++){
                            if($day == $i){
                                print("<option selected>$i</option>");
                            }else {
                                print("<option>$i</option>");
                            }
                        }
                    ?>
                </select>
                <select name="month">
                    <?php
                        for($i=1; $i<=12; $i++){
                            if($month == $i){
                                print("<option selected>$i</option>");
                            }else {
                                print("<option>$i</option>");
                            }
                        }
                    ?>
                </select>
                <select name="year">
                    <?php
                    for($i=1990; $i<=2030; $i++){
                        if($year == $i){
                            print("<option selected>$i</option>");
                        }else {
                            print("<option>$i</option>");
                        }
                    }
                    ?>
                </select>
            </td>
        </tr>

        <!--Time-->
        <tr>
            <td>Time: </td>
            <td>
                <select name="hour">
                    <?php
                    for($i=0; $i<=23; $i++){
                        if($hour == $i){
                            print("<option selected>$i</option>");
                        }else {
                            print("<option>$i</option>");
                        }
                    }
                    ?>
                </select>
                <select name="minute">
                    <?php
                    for($i=0; $i<=59; $i++){
                        if($minute == $i){
                            print("<option selected>$i</option>");
                        }else {
                            print("<option>$i</option>");
                        }
                    }
                    ?>
                </select>
                <select name="second">
                    <?php
                    for($i=0; $i<=59; $i++){
                        if($second == $i){
                            print("<option selected>$i</option>");
                        }else {
                            print("<option>$i</option>");
                        }
                    }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td align="right"><input type="submit" value="Submit"></td>
            <td align="light"><input type="reset" value="Reset"></td>
        </tr>
    </table>

    <div>
        <?php
            if(array_key_exists("name", $_GET)) {
                print "Hi $name!<br>";
                print "You have choose to have an appointment on $hour:$minute:$second, $day/$month/$year<br>";
                print "<br>More information <br>";

                if ($hour > 12) {
                    $hour_12 = $hour - 12;
                    $time = "PM";
                } else {
                    $hour_12 = $hour;
                    $time = "AM";
                }

                if ($month == 4 || $month == 6 || $month == 9 || $month == 11) {
                    $no_days = 30;
                } elseif ($month == 2) {
                    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                        $no_days = 29;
                    } else {
                        $no_days = 28;
                    }
                } else {
                    $no_days = 31;
                }
                print "In 12 hours, the time and date is $hour_12:$minute:$second $time, $day/$month/$year<br>";
                print "This month has $no_days days !";
            }
        ?>
    </div>

</form>
</body>

</html>