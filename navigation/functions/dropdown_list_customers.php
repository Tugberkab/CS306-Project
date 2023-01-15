<?php
    include '../../config.php';
    $sql_command = 'SELECT ssn, cname, phone FROM customer';
    $myresult = mysqli_query($db, $sql_command);

    while($ssn_row = mysqli_fetch_assoc($myresult)) {
        $ssn = $ssn_row['ssn'];
        $sname = $ssn_row['sname'];
        $phone = $ssn_row['phone'];
        echo "<option value=$ssn>". $ssn . " - " . $cname . "</option>";
    }
?>