<?php
    include '../../config.php';
    $eid = $_GET['ids'];
    $sql_statement = "DELETE FROM employees WHERE eid = $eid";
    $result = mysqli_query($db, $sql_statement);

    if($result == 1) {
        echo 'The user with id ' . $eid . ' has been successfully deleted from the system.: ' . '<br>' . 'Deletion result: ' . $result; 
    } else {
        echo 'There is an error. ' . '<br>' . 'Deletion result: ' . $result; 
    }
?>