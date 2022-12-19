<link rel="stylesheet" href="../../styles/nav_menu.css" />
<link rel="stylesheet" href="../../styles/body.css" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet" />

<div class="navMenuContainer">
    <nav class="navMenu">
        <ul>
            <a href="delete_view.php" class="active">Delete</a>
            <a href="employee_insertion_view.php">Employee Insertion</a>
            <a href="filter_view.php">Filter</a>
            <a href="get_employees_view.php">Get All Employees</a>
        </ul>
    </nav>
</div>

<form action="../functions/delete.php" method="GET">
<select name="ids">
<?php include '../functions/dropdown_list_employees.php' ?>
</select>
<button>DELETE</button>
</form>