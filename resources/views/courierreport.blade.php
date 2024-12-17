<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
    <h1>Couriers Report</h1>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>Tracking ID</th>
                <th>Booking Date</th>
                <th>Sender Name</th>
                <th>Receiver Name</th>
                <th>Sender Address</th>
                <th>Receiver Address</th>
                <th>QTY</th>
                <th>Amount</th>
                <th>Sender Contact</th>
                <th>Received By</th>
                <th>Received Date</th>
                <th>Received Contact</th>
                <th>Status</th>
                <th>Received By Contact</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->bdate }}</td>
                    <td>{{ $user->sname }}</td>
                    <td>{{ $user->rname }}</td>
                    <td>{{ $user->senderaddress }}</td>
                    <td>{{ $user->receiveraddress }}</td>
                    <td>{{ $user->qty }}</td>
                    <td>{{ $user->charges }}</td>
                    <td>{{ $user->sendercontact }}</td>
                    <td>{{ $user->receivedby }}</td>
                    <td>{{ $user->receiveddate }}</td>
                    <td>{{ $user->receivercontact }}</td>
                    <td>{{ $user->status }}</td>
                    <td>{{ $user->receivedbycontact }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
            </div>
        </div>
    </div>
</body>
</html>
