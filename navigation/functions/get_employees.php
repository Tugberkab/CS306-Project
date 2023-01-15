<?php
    include_once '../../config.php';
    $sql_statement = 'SELECT * FROM employees';        
    $result = mysqli_query($db, $sql_statement);

    while($row = mysqli_fetch_assoc($result)) {
        $employee_id = $row['eid'];
        $employee_salary = $row['esalary'];
        $employee_name = $row['ename']; 
        echo '<tr>' . '<td>' . $employee_id . '</td>' . '<td>' . $employee_salary . '</td>' . '<td>' . $employee_name . '</td>' . '</tr>';
    }
?>
