<link rel="stylesheet" href="../../styles/nav_menu.css" />
<link rel="stylesheet" href="../../styles/body.css" />
<link rel="stylesheet" href="../../styles/search_box.css" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

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

<div class="searchBox">
    <form action="../functions/search_box.php" method="POST">
        <input type="text" name="search" placeholder="Type names to search...">
        <button><i class="fa fa-search"></i></button>
    </form>
</div>

<div class="bottomPage">
    <form action="../functions/filter.php" method="POST">
        Enter the minimum salary:
        <input type="text" id="esalary" name="esalary">
        <input type="submit" value="Submit">
    </form>
</div>