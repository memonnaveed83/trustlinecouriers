<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
   
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
        <div class="row">
            <div>
                

<table class="table">

    <tbody>
        @foreach ($data as $user)
            <tr>
                <td>ID</td>
                <td>{{ $user->id }}</td>
            </tr>
            <tr>
                <td>First Name</td>
                <td>{{ $user->fname }}</td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>{{ $user->lname }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <td>Contact</td>
                <td>{{ $user->contact }}</td>
            </tr>
                {{-- <td>
                    <button class="btn btn-primary viewButton" data-id="{{ $user->id }}">View</button>
                </td> --}}
            
        @endforeach
    </tbody>
</table>

            </div>
        </div>
    </div>

</body>
</html>