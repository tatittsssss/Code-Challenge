<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        input[type="file"] {
            border: none;
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form>
            <input type="hidden" id="token" name="token" value="{{ csrf_token() }}">
            <label for="name">Name</label>
            <input type="text" id="name" name="name"><br>
            <label for="address">Address</label>
            <input type="text" id="address" name="address"><br>
            <label for="age">Age</label>
            <input type="text" id="age" name="age"><br>
            <label for="email">email</label>
            <input type="text" id="email">
            <label for="password">password</label>
            <input type="password" id="password">
            <label for="image">Insert Image</label>
            {{-- <input type="file" id="image"><br> --}}
            <input type="file" id="image" accept="image/*"><br>
            <img id="imagePreview" src="" alt="Image Preview" height="50px" width="50px"><br>
            <button id="signup">Sign Up</button>
        </form>
    </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/js/signup.js')}}"></script>
