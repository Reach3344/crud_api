<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background-color: #f4f6f9;
        padding: 30px;
    }

    nav {
        background: #2c3e50;
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 25px;
        display: flex;
        justify-content: center;
        gap: 25px;
    }

    nav a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        transition: 0.3s;
    }

    nav a:hover {
        color: #3498db;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #2c3e50;
    }

    button {
        background: #3498db;
        color: white;
        border: none;
        padding: 10px 18px;
        border-radius: 5px;
        cursor: pointer;
        margin-bottom: 20px;
        font-size: 14px;
    }

    button:hover {
        background: #2980b9;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    thead {
        background: #2c3e50;
        color: white;
    }

    th, td {
        padding: 12px;
        text-align: left;
    }

    tbody tr:nth-child(even) {
        background-color: #f8f9fa;
    }

    tbody tr:hover {
        background-color: #eaf4ff;
    }

    th {
        font-weight: bold;
    }
</style>
<body>
<nav style="margin-bottom: 20px; background-color: #ada4a4; padding: 10px; display: flex; justify-content: center; gap: 20px;">
    <a href="/customers">Customers</a>
    <a href="/movies">View Movies</a>
</nav>

<h2>Customer List</h2>

<button><a href="/create" >Create Customer</a></button>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->gender }}</td>
            <td>
                <a href="/customers/{{ $customer->id }}">View</a>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
