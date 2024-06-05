@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #f9f9f9;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .item-name {
            font-weight: bold;
        }
        .item-price {
            color: #ff5733;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Music Shop</h1>
        <ul>
            <li>
                <span class="item-name">Guitar</span>
                <span class="item-price">$300</span>
            </li>
            <li>
                <span class="item-name">Piano</span>
                <span class="item-price">$1200</span>
            </li>
            <li>
                <span class="item-name">Drum Set</span>
                <span class="item-price">$750</span>
            </li>
            <li>
                <span class="item-name">Violin</span>
                <span class="item-price">$450</span>
            </li>
            <li>
                <span class="item-name">Flute</span>
                <span class="item-price">$150</span>
            </li>
        </ul>
    </div>
</body>
</html>


@endsection