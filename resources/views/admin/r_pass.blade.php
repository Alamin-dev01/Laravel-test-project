@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Music Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0e0e0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .reset-password-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .reset-password-container h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .reset-password-container input[type="email"],
        .reset-password-container input[type="password"] {
            width: calc(100% - 20px);
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .reset-password-container button {
            width: calc(100% - 20px);
            padding: 15px;
            border: none;
            border-radius: 5px;
            background-color: #007BFF;
            color: white;
            font-size: 18px;
            cursor: pointer;
            margin-bottom: 10px;
        }
        .reset-password-container button:hover {
            background-color: #0056b3;
        }
        .reset-password-container a {
            display: block;
            margin-top: 20px;
            color: #007BFF;
            text-decoration: none;
            font-size: 16px;
        }
        .reset-password-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="reset-password-container">
    <h2>Reset Your Password</h2>
    <form action="reset_password.php" method="POST">
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="new_password" placeholder="Enter new password" required>
        <input type="password" name="confirm_password" placeholder="Confirm new password" required>
        <button type="submit">Reset Password</button>
    </form>
    <a href="login.php">Back to Login</a>
</div>

</body>
</html>
31
@endsection