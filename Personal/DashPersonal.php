<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CCAM  Perso | Dashboard</title>
        <link rel="stylesheet" href="DashP.css">
        <link rel="icon" type="image" href="../Photos/LOGO.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>

    <body>
        <nav id="top-navbar">
            <div class="navbar-left">
                <span class="navbar-user"><i class="fa-regular fa-user"></i> Justin David</span>
            </div>
            <div class="navbar-right">
                <a href="#" title="Search"><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href="/HelpCenter/helpcenter.php" title="Help"><i class="fa-regular fa-circle-question"></i> Help</a>
                <a href="#" title="Notifications"><i class="fa-regular fa-bell"></i></a>
                <a href="#" title="Profile"><i class="fa-regular fa-user-circle"></i></a>
                <a href="/Login/login.php" title="Logout"><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
        </nav>
        <nav id="sidebar">
            <div class="logo">
                <a href="../Home/homepage.php"><img src="../Photos/Perso.png" alt="Logo"></a>
                <hr>
                <h2>MENU</h2>
            </div>
            <ul>
                <li><a href="DashPersonal.php">Dashboard</a></li>
                <li><a href="Accounts.php">Accounts</a></li>
                <li><a href="Expenses.php">Expenses</a></li>
                <li><a href="Loans.php">Loans</a></li>
                <li><a href="Incomes.php">Incomes</a></li>
            </ul>    
        </nav>

        <main class="dashboard-main">
            <header class="dashboard-header">
                <h1>Welcome, Admin</h1>
                <p>Use the menu to manage users, transactions, and more.</p>
            </header>

            <hr>

        <section class="contents">
            <div class="contents-cards">
                <div class="contents-card">
                    <i class="fa-solid fa-users"></i>
                    <h3>Users</h3>
                    <p>View and manage all users.</p>
                </div>
                <div class="contents-card">
                    <i class="fa-solid fa-money-check-dollar"></i>
                    <h3>Transactions</h3>
                    <p>Monitor all transactions.</p>
                </div>
                <div class="contents-card">
                    <i class="fa-solid fa-chart-line"></i>
                    <h3>Sales</h3>
                    <p>Track sales performance.</p>
                </div>
                <div class="contents-card">
                    <i class="fa-solid fa-user-group"></i>
                    <h3>Employees</h3>
                    <p>Manage employee records.</p>
                </div>
            </div>
        </section>
    </main>
    </body>
</html>