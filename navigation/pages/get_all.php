<link rel="stylesheet" href="../../styles/nav_menu.css" />
<link rel="stylesheet" href="../../styles/table.css" />
<link rel="stylesheet" href="../../styles/body.css" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet" />

<div class="navMenuContainer">
    <nav class="navMenu">
        <ul>
            <a href="home.php" class="active">Home</a>

            <a href="delete_view.php">Delete</a>
            <a href="insertion_view.php">Insertion</a>
            <a href="filter_view.php">Filter</a>
            <a href="get_all.php" class="active">Get All</a>
            <a href="chats.php" class="active">Contact</a>
        </ul>
    </nav>
</div>

<div class="bottomPage">
    <table>    
        <tr>
            <th>Employee Id</th>
            <th>Employee Salary</th>
            <th>Employee Name</th>
        </tr>
    
        <?php include '../functions/get_employees.php'; ?>
    </table>

    <br>
    <br>

    <table>    
        <tr>
            <th>Customer SSN</th>
            <th>Customer Name</th>
            <th>Customer Phone</th>
        </tr>
    
        <?php include '../functions/get_customers.php'; ?>
    </table>
</div>