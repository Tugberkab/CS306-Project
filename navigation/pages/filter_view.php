<link rel="stylesheet" href="../../styles/nav_menu.css" />
<link rel="stylesheet" href="../../styles/body.css" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet" />

<div class="navMenuContainer">
    <nav class="navMenu">
        <ul>
            <a href="delete_view.php">Delete</a>
            <a href="employee_insertion_view.php">Employee Insertion</a>
            <a href="filter_view.php" class="active">Filter</a>
            <a href="get_employees_view.php">Get All Employees</a>
        </ul>
    </nav>
</div>

<p>
    These are the employees whose salary is bigger than 1000'
    <br>
    <?php include '../functions/filter.php' ?>
</p>