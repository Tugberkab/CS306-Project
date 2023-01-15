<?php
    include '../../config.php';
    $ssn = $_POST['ssn'];
    $sql_statement = "SELECT ssn, cname, phone FROM customer WHERE ssn like '%$ssn%'";
    $result = mysqli_query($db, $sql_statement);
    
    echo 'These are the customers whose ssn contains ' . $ssn . '.' . '<br>'; 

    while($row = mysqli_fetch_assoc($result)) {
        echo $row['cname'] . '<br>';
    }
?>