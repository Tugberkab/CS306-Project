<link rel="stylesheet" href="../../styles/nav_menu.css">
<link rel="stylesheet" href="../../styles/body.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

<nav class="navMenu">
    <ul>
        <a href="admin_view.php" class="active">Admin</a>
        <a href="employee_insertion_view.php">Employee Insertion</a>
        <a href="filter_view.php">Filter</a>
        <a href="get_employees_view.php">Get All Employees</a>
    </ul>
</nav>

<form action="../functions/delete.php" method="GET">
<select name="ids">
<?php include '../functions/dropdown_list_employees.php' ?>
</select>
<button>DELETE</button>
</form>