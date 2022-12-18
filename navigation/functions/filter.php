<?php

    include '../../config.php';
    $sql_statement = "SELECT eid, esalary, ename FROM employees WHERE esalary > 1000";
    $result = mysqli_query($db, $sql_statement);
    
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['ename'] . '<br>';
    }
?>