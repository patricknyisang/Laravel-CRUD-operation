<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #2C3E50;
            padding-top: 20px;
            position: fixed;
            height: 100vh;
        }

        .sidebar h2 {
            color: white;
            text-align: center;
            padding: 20px 0;
            border-bottom: 1px solid #34495E;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 15px 20px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: white;
            display: block;
            font-weight: 500;
        }

        .sidebar ul li a:hover {
            background-color: #34495E;
            border-radius: 4px;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
            background-color: #ECF0F1;
            overflow-y: scroll;
        }

        .main-content h1 {
            font-size: 36px;
            color: #2C3E50;
            margin-bottom: 20px;
        }

        .main-content .cards {
            display: flex;
            gap: 20px;
        }

        .card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            flex: 1;
            text-align: center;
        }

        .card h3 {
            color: #2C3E50;
        }

        .card p {
            color: #7F8C8D;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
        <li><a href="/">Home</a></li>
        <li><a href="fetchproducts">view</a></li>
           
           <li><a href="addview">Add</a></li>
          
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Dashboard Overview</h1>
   
    </div>

</body>
</html>
