<link rel="stylesheet" href="../../styles/table.css" />

<?php
    try {
        $db = new PDO("mysql:host=localhost;dbname=car-sales-and-repairs;charset=utf8","root","");
    } catch (PDOException $e) {
        echo $e -> getMessage();
    }

    if($_POST['search'] == '') {
        echo '<h2>No result found';
        echo '<h2><a href="../pages/filter_view.php">Exit</a></h2>';
    } else {
        $search = trim($_POST['search']);
        $query = $db -> prepare("SELECT * FROM employees WHERE ename like '%$search%'");
        $query -> execute(array());
        $control = $query -> fetchAll(PDO::FETCH_OBJ);
        $count = $query -> rowCount();
        if($count > 0) { 
?>

        <table>
            <tr>
                <td>Employee Id</td>
                <td>Employee Name</td>
            </tr>
            <?php
                foreach($control as $list) {
            ?>
                <tr>
                    <td><?php echo $list -> eid; ?></td>
                    <td><?php echo $list -> ename; ?></td>
                </tr>
                <?php } ?>
        </table>

<?php 
        } else {
            echo '<h2>No result found';
            echo '<h2><a href="../pages/filter_view.php">Exit</a></h2>';
        }
    }
?>