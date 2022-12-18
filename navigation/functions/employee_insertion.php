<?php
    include '../../config.php';
    $eid = $_POST['eid'];
    $esalary = $_POST['esalary'];
    $ename = $_POST['ename'];
    $sql_statement = "INSERT INTO employees(eid, esalary, ename) VALUES($eid, $esalary, '$ename')";
    $result = mysqli_query($db, $sql_statement);  
    
    if($result == 1) {
        echo 'This user has been added successfully.' . '<br>' . 'Insertion result: ' . $result;
    } else {
        echo 'There is an error.' . '<br>' . 'Insertion result: ' . $result;
    }
?>