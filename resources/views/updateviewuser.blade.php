<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

 
   
    
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
    


{{-- start update form --}}

  




<div class="container">
    <div class="card w-50">
        <div class="card-body">
            <div class="m-sm-4">
                
                    <form action="{{route('updateuserrecord', $data->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Update First Name</label>
                        <input class="form-control form-control-lg" type="text" value="{{$data->fname}}" name="fname" placeholder="Update First Name">
                    </div>
                    <div class="form-group">
                        <label>Update Last Name</label>
                        <input class="form-control form-control-lg" type="text" value="{{$data->lname}}" name="lname" placeholder="Update Last Name">
                    </div>
                    <div class="form-group">
                        <label>Update Email</label>
                        <input class="form-control form-control-lg" type="email" value="{{$data->email}}" name="email" placeholder="Update Email">
                    </div>
                    <div class="form-group">
                        <label>Update Contact</label>
                        <input class="form-control form-control-lg" type="text" value="{{$data->contact}}" name="contact" placeholder="Update Contact">
                    </div>
                    
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-lg btn-dark">Update User Record</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



{{-- End update form --}}

</body>
</html>