<html>
<head><title>Distance and Time Calculations</title></head>
<body>
From Chicago to: <br>
<table border="1px">
    <tr>
        <td>No</td>
        <td>Destination</td>
        <td>Distance</td>
        <td>Driving time</td>
        <td>Walking time</td>
    </tr>
    <?php
        $cities = array('Dallas'=>803,
                        'Toronto'=>435,
                        'Boston'=>848,
                        'Nashville'=>406,
                        'Las Vegas'=>1526,
                        'San Francisco'=>1835,
                        'Washington, DC'=>595,
                        'Miami'=>1189,
                        'Pittsburgh'=>409);
        $destination = $_GET["destination"];

    //    if(isset($cities[$destination])){
    //        $distance = $cities[$destination];
    //        $time = round($distance/60, 2);
    //        $walktime = round($distance/5, 2);
    //        print "The distance between Chicago and <i>$destination</i> is $distance miles.";
    //        print "<br>Driving at 60 miles per hour is would take $time hours.";
    //        print "<br>Walking at 5 miles per hour is would take $walktime hours.";
    //    }else{
    //        print "Sorry do not has destination information for $destination.";
    //    }

        #Step 4
        $i = 1;
        foreach ($destination as $place){
            $distance = $cities[$place];
            $time = round($distance/60, 2);
            $walktime = round($distance/5, 2);

            print "<tr><td>$i</td><td>$place</td><td>$distance</td><td>$time</td><td>$walktime</td></tr>";
            $i = $i + 1;
        }
    ?>
</html>