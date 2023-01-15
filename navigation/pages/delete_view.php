<link rel="stylesheet" href="../../styles/nav_menu.css" />
<link rel="stylesheet" href="../../styles/body.css" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet" />

<div class="navMenuContainer">
    <nav class="navMenu">
        <ul>
            <a href="home.php" class="active">Home</a>

            <a href="delete_view.php" class="active">Delete</a>
            <a href="insertion_view.php">Insertion</a>
            <a href="filter_view.php">Filter</a>
            <a href="get_all.php">Get All</a>
            <a href="chats.php" class="active">Contact</a>
        </ul>
    </nav>
</div>

<div class="bottomPage">
    <form action="../functions/delete.php" method="GET">
        <h2>Employees</h2>
        <select name="ids">
        <?php include '../functions/dropdown_list_employees.php' ?>
        </select>
        <button>DELETE</button>
    </form>
</div>

<div class="bottomPage">
    <form action="../functions/delete_customer.php" method="GET">
        <h2>Customers</h2>
        <select name="ids">
        <?php include '../functions/dropdown_list_customers.php' ?>
        </select>
        <button>DELETE</button>
    </form>
</div>