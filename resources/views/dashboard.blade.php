<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 40%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        img {
            display: block;
            margin: 0 auto;
            border-radius: 8px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
        }

        .form-row .form-group {
            width: 48%;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>User Profile</h2>
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            {{-- @foreach ($user as $users) --}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" value="{{ $user->address }}">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" id="age" name="age" value="{{ $user->age }}">
            </div>
            <div class="form-group">
                <label for="Profile">Profile</label><br>
                <img src="{{ asset('storage/' . $user->image) }}" alt="User Image" width="100" height="100">

            </div>
            {{-- @endforeach --}}

            <button type="submit" class="submit-btn">Update Profile</button>
            
        </form>
    </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- <script src="{{ asset('assets/js/dashboard.js')}}"></script> --}}
