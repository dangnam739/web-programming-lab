<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<body>
<h1>Debug Demo</h1>
<table border="1" width="700">
<tr style='background-color:red;text-align:center;font-weight: bold;'>
	<td>Name</td>
	<td>Address</td>
	<td>Telephone</td>
</tr>

<?php

$db = array(
    array("Le Quang","Hai Phong","123"),
    array("Dang Nam","Ha Noi","124"),
    array("Quang Loc","Ha Tay","114")
    
);

$count = 0;
foreach($db as $students){
    if($count%2 == 0)
        echo "<tr style='background-color:yellow;'>";
    foreach($students as $value){
        echo "<td>$value</td>";
    }
    echo "</tr>";
    $count++;
}

?>	

</table>
</body>
</html>