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

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #2C3E50;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #34495E;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #BDC3C7;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-group textarea {
            resize: none;
            height: 100px;
        }

        .submit-btn {
            background-color: #2C3E50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #34495E;
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

        <!-- Form -->
        <div class="form-container">
            <h2>Submit Information</h2>
            <form method="POST" action="{{ url('update_item/' . $product->product_id) }}" enctype="multipart/form-data" class="registration-form">
            {{ csrf_field() }} 
                {{ method_field('PUT') }} <!-- Add PUT method for update -->
                
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="proname" value="{{$product->proname }}" placeholder="Enter the product name" required>
                </div>
                
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" id="price" name="price" value="{{ $product->price }}" placeholder="Enter the price" required>
                </div>
                
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="text" id="quantity" name="quantity" value="{{ $product->quantity }}" placeholder="Enter the quantity" required>
                </div>
                
                <button type="submit" class="submit-btn">Update</button>
            </form>
        </div>

    </div>

</body>
</html>
