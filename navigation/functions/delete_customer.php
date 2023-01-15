<?php
    include '../../config.php';
    $ssn = $_GET['ids'];
    $sql_statement = "DELETE FROM customer WHERE ssn = $ssn";
    $result = mysqli_query($db, $sql_statement);

    if($result == 1) {
        echo 'The customer with ssn ' . $ssn . ' has been successfully deleted from the system.: ' . '<br>' . 'Deletion result: ' . $result; 
    } else {
        echo 'There is an error. ' . '<br>' . 'Deletion result: ' . $result; 
    }
?>