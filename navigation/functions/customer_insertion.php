<?php
    include '../../config.php';
    $ssn = $_POST['ssn'];
    $cname = $_POST['cname'];
    $phone = $_POST['phone'];
    $sql_statement = "INSERT INTO customer (ssn, cname, phone) VALUES('$ssn', '$cname', '$phone')";
    $result = mysqli_query($db, $sql_statement);  
    
    if($result == 1) {
        echo 'This user has been added successfully.' . '<br>' . 'Insertion result: ' . $result;
    } else {
        echo 'There is an error.' . '<br>' . 'Insertion result: ' . $result;
    }
?>