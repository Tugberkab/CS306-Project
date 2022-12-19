<link rel="stylesheet" href="../../styles/nav_menu.css" />
<link rel="stylesheet" href="../../styles/body.css" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet" />

<div class="navMenuContainer">
    <nav class="navMenu">
        <ul>
            <a href="delete_view.php">Delete</a>
            <a href="employee_insertion_view.php" class="active">Employee Insertion</a>
            <a href="filter_view.php">Filter</a>
            <a href="get_employees_view.php">Get All Employees</a>
        </ul>
    </nav>
</div>



<form action="../functions/employee_insertion.php", method="POST">
    Employee id:
    <input type="text" id="eid" name="eid">
    <br>
    Employee salary:
    <input type="text" id="esalary" name="esalary">
    <br>
    Employee name:
    <input type="text" id="ename" name="ename">
    <br>
    <input type="submit" value="Submit">
</form>
