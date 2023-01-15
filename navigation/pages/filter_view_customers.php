<link rel="stylesheet" href="../../styles/nav_menu.css" />
<link rel="stylesheet" href="../../styles/body.css" />
<link rel="stylesheet" href="../../styles/search_box.css" />
<link rel="stylesheet" href="../../styles/table.css" />

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

<div class="navMenuContainer">
    <nav class="navMenu">
        <ul>
            <a href="home.php" class="active">Home</a>
            <a href="filter_view_employees.php">Employees</a>
            <a href="filter_view_customers.php">Customers</a>

            
        </ul>
    </nav>
</div>

<div class="searchBox">
    <form action="../functions/search_box_customers.php" method="POST">
        <input type="text" name="search" placeholder="Type names to search...">
        <button><i class="fa fa-search"></i></button>
    </form>
</div>

<div class="bottomPage">
    <form action="../functions/filter_customers.php" method="POST">
        Enter the SSN of the customer:
        <input type="text" id="ssn" name="ssn">
        <input type="submit" value="Submit">
    </form>
</div>
<div class="bottomPage">
    <table>    
        <tr>
            <th>Customer SSN</th>
            <th>Customer Name</th>
            <th>Customer Phone</th>
        </tr>
    
        <?php include '../functions/get_customers.php'; ?>
    </table>
</div>
