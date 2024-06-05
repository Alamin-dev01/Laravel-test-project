@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Music Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .forgot-password-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .forgot-password-container h2 {
            margin-bottom: 20px;
        }
        .forgot-password-container input[type="text"],
        .forgot-password-container input[type="email"],
        .forgot-password-container input[type="password"],
        .forgot-password-container input[type="tel"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .forgot-password-container button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }
        .forgot-password-container button:hover {
            background-color: #0056b3;
        }
        .forgot-password-container a {
            display: block;
            margin-top: 15px;
            color: #007BFF;
            text-decoration: none;
        }
        .forgot-password-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="forgot-password-container">
    <h2>Forgot Password</h2>
    <form action="reset_password.php" method="POST">
        <input type="email" name="email" placeholder="Enter your email" required>
        <button type="submit">Reset Password</button>
    </form>
    <form action="login_with_phone.php" method="POST">
        <input type="tel" name="phone" placeholder="Enter your phone number" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <button type="submit">Log in with Phone Number</button>
    </form>
    <a href="login.php">Back to Login</a>
</div>

</body>
</html>


@endsection