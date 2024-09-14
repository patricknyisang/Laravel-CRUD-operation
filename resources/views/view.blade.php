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

        /* Data Table Styles */
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .data-table thead {
            background-color: #2C3E50;
            color: white;
        }

        .data-table th, .data-table td {
            padding: 12px 15px;
            text-align: left;
        }

        .data-table th {
            font-weight: 500;
        }

        .data-table tbody tr:nth-child(even) {
            background-color: #F5F5F5;
        }

        .data-table tbody tr:hover {
            background-color: #E9E9E9;
        }

        /* Button Styles */
        .btn {
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-edit {
            background-color: #3498db;
            color: white;
        }

        .btn-delete {
            background-color: #e74c3c;
            color: white;
        }

        .btn-edit:hover {
            background-color: #2980b9;
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }

        /* Edit Form Styles */
        .edit-form {
            display: none;
            margin-top: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .edit-form h2 {
            margin-bottom: 20px;
        }

        .edit-form input[type="text"], .edit-form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .edit-form .btn-submit {
            background-color: #2ecc71;
            color: white;
        }

        .edit-form .btn-submit:hover {
            background-color: #27ae60;
        }

        .edit-form .btn-cancel {
            background-color: #e74c3c;
            color: white;
        }

        .edit-form .btn-cancel:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="fetchproducts">View</a></li>
            <li><a href="addview">Add</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Dashboard Overview</h1>

        <!-- Data Table -->
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th> <!-- New column for buttons -->
                </tr>
            </thead>
            <tbody>
                @foreach ($fetchitems as $item)
                <tr>
                    <td>{{ $item->product_id }}</td>
                    <td>{{ $item->proname }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>
    <!-- Edit Button -->
    <a href="{{ route('edit', ['product_id' => $item->product_id]) }}" class="btn btn-edit">Edit</a>
    <!-- Delete Button -->
    <form action="/deleteitem/{{ $item->product_id }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-delete">Delete</button>
    </form>
</td>

                </tr>
                @endforeach
            </tbody>
        </table>

  

    </div>

 

</body>
</html>
