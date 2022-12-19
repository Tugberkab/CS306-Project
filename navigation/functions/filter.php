<?php
    include '../../config.php';
    $esalary = $_POST['esalary'];
    $sql_statement = "SELECT eid, esalary, ename FROM employees WHERE esalary > $esalary";
    $result = mysqli_query($db, $sql_statement);
    
    echo 'These are the employees whose salary is higher than ' . $esalary . '.' . '<br>'; 

    while($row = mysqli_fetch_assoc($result)) {
        echo $row['ename'] . '<br>';
    }
?>