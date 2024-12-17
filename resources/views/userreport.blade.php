<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>User Report</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f4f4f4; /* Optional: for better visualization */
        }

        .container {
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #007bff;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1>Users Report</h1>
        <div class="row">
            <div>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->fname }}</td>
                    <td>{{ $user->lname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->contact }}</td>
                    <td>{{ $user->type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

            </div>
        </div>
    </div>
</body>
</html>
