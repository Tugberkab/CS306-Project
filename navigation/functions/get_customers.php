<?php
    include '../../config.php';
    $sql_statement = 'SELECT * FROM customer';        
    $result = mysqli_query($db, $sql_statement);

    while($row = mysqli_fetch_assoc($result)) {
        $customer_ssn = $row['ssn'];
        $customer_name = $row['cname'];
        $customer_phone = $row['phone']; 
        echo '<tr>' . '<td>' . $customer_ssn . '</td>' . '<td>' . $customer_name . '</td>' . '<td>' . $customer_phone . '</td>' . '</tr>';
    }
?>