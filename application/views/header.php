<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="public/assets/css/style.css">
 
    <link rel="stylesheet" href="public/assets/css/styles.css">
    <style>
        body {
    margin: 0;
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
}

    .navbar {
        background-color: #333;
        overflow: hidden;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 25px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
    }

    .fixed-navbar {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: #f4f4f4;
        z-index: 1000;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Adjust content margin to account for fixed header */
    .content-with-fixed-header {
        margin-top: 60px; /* Adjust the height based on your fixed header's height */
    }

    .hamburger-menu {
        display: none;
        font-size: 24px;
        cursor: pointer;
        color: #fff;
        transition: color 0.3s;
    }

    .nav-list {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
    }

    .nav-list li {
        margin-right: 20px;
    }

    .nav-list a {
        color: white;
        text-decoration: none;
        padding: 10px;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
    }

    .nav-list a:hover {
        background-color: #ddd;
        color: #333;
    }

    .nav-list .active a {
        background-color: #ddd;
        color: #333;
    }

    .logout {
        margin-left: auto;
    }

    .logout a {
        color: white !important;
        text-decoration: none !important;
        padding: 10px;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
    }

    .logout a:hover {
        background-color: #c82333;
        color: white;
    }

    .content {
        padding: 20px;
    }

    @media screen and (max-width: 768px) {
        .hamburger-menu {
            display: block;
            font-size: 24px;
            cursor: pointer;
            color: #fff;
            transition: color 0.3s;
            z-index: 1001; /* Ensure the hamburger icon is above the menu */
        }

        .nav-list {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: none;
            position: absolute;
            top: 20px; /* Adjust the top value to properly position the menu below the navbar */
            left: 0;
            width: 100%;
            background-color: #333;
            z-index: 1000;
        }

        .nav-list.active {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .nav-list li {
            margin-top: 15px;
        }

        .nav-list a {
            color: white;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            margin-bottom: 10px; /* Adjust this value for spacing */
        }

        .nav-list a:hover {
            background-color: #ddd;
            color: #333;
        }
    }


    </style>
       <link rel="stylesheet" href="public/assets/css/admin.css">
</head>
<body>
    <div class="fixed-navbar">
    <nav class="navbar">
    <div class="hamburger-menu">&#9776;</div>
        <ul class="nav-list">
            <li <?php if ($active_tab == 'home') echo 'class="active"'; ?>><a href="<?php echo base_url('adminView')?>">Home</a></li>
            <li <?php if ($active_tab == 'view_roles') echo 'class="active"'; ?>><a href="<?php echo base_url('viewRole')?>">View Roles</a></li>
            <li <?php if ($active_tab == 'add_question_paper') echo 'class="active"'; ?>><a href="<?php echo base_url('addPaper')?>">Add Question Paper</a></li>
            <div class="logout"><a href="/adminlogout">Logout</a></div>
        </ul>   
    </nav>
    </div>
