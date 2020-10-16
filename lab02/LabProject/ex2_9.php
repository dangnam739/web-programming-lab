<html lang="en">
    <head><title>Display information</title></head>
    <body>
        <h1 style="text-align: center; color: blue; font-weight: bold">Your Information</h1>
        <?php
            $i = 1;
            $name = $_POST["name"];
            $class = $_POST["class"];
            $university = $_POST["university"];

            print "Hello, <b>$name</b> <br>";
            print "You are studying at <b>$class, $university</b><br>";
            print "Your hobbies is: <br>";
            if (isset($_POST['hobby'])) {
                foreach ($_POST['hobby'] as $hobby){
                    echo "&nbsp; <b>$i. $hobby</b> <br>";
                    $i++;
                }
            }
        ?>
    </body>
</html>
