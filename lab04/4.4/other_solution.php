<html>
<head><title>User Sorting</title></head>
<body>
    <?php
    function user_sort($a, $b) {
        // smarts is all-important, so sort it first
        if($b == 'smarts') {
            return 1;
        } else if($a == 'smarts') {
            return -1;
        }
        return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
    }

    $values = array(
        'name' => 'Buzz Lightyear',
        'email_address' => 'buzz@starcommand.gal',
        'age' => 32,
        'smarts' => 'some'
    );
    $submitted = $_GET['submitted'] ?? null;
    $sort_type = $_GET['sort_type'] ?? "sort";
    if(isset($submitted)) {

        if($sort_type == 'usort' || $sort_type == 'uksort' || $sort_type == 'uasort') {
            $sort_type($values, 'user_sort');
        } else {
            $sort_type($values);
        }
    }

    function checked($type, $sort_type) {
        echo $type == $sort_type ? "checked" : "";
    }
    ?>
    <form action="other_solution.php" method="get">
        <<table width="100%">
            <tr>
                <td>
                    <input type="radio" name="sort_type" value="sort" checked="checked" />Standard sort<br>
                    <input type="radio" name="sort_type" value="rsort" <?php checked("rsort", $sort_type) ?>/> Reverse sort<br>
                </td>
                <td>
                    <input type="radio" name="sort_type" value="usort" <?php checked("usort", $sort_type) ?>/> User-defined sort<br >
                    <input type="radio" name="sort_type" value="ksort" <?php checked("ksort", $sort_type) ?>/> Key sort<br>
                </td>
                <td>
                    <input type="radio" name="sort_type" value="krsort" <?php checked("krsort", $sort_type) ?>/> Reverse key sort<br>
                    <input type="radio" name="sort_type" value="uksort" <?php checked("uksort", $sort_type) ?>/> User-defined key sort<br />
                </td>
                <td>
                    <input type="radio" name="sort_type" value="asort" <?php checked("asort", $sort_type) ?>/> Value sort<br>
                    <input type="radio" name="sort_type" value="arsort" <?php checked("arsort", $sort_type) ?>/> Reverse value sort<br>
                    <input type="radio" name="sort_type" value="uasort" <?php checked("uasort", $sort_type) ?>/> User-defined value sort<br />
                </td>
            </tr>
        </table>

        <p style="text-align: center"><input type="submit" value="sort" name="submitted" /></p>
    </form>

    <table width="100%">
        <tr>
            <td>
                <p style="text-align: left;">Value before sorting: </p><br>
                <ul>
                    <?php
                    foreach($values as $key=>$value) {
                        echo "<li><b>$key</b>: $value</li>";
                    }
                    ?>
                </ul>
            </td>
            <td>
                <p> Values <?= isset($submitted) ? "sorted by $sort_type" : "unsorted"; ?>:</p>
                <ul>
                    <?php
                    foreach($values as $key=>$value) {
                        echo "<li><b>$key</b>: $value</li>";
                    }
                    ?>
                </ul>
            </td>
        </tr>
    </table>
</body>
</html>
