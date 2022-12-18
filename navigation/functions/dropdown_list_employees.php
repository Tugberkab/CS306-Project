<?php
    include '../../config.php';
    $sql_command = 'SELECT eid, esalary, ename FROM employees';
    $myresult = mysqli_query($db, $sql_command);

    while($eid_row = mysqli_fetch_assoc($myresult)) {
        $eid = $eid_row['eid'];
        $esalary = $eid_row['esalary'];
        $ename = $eid_row['ename'];
        echo "<option value=$eid>". $esalary. " - ". $ename. "</option>";
    }
?>