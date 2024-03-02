<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #daf7f679;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: #fff;
            box-shadow: 10px 10px 95px rgba(61, 232, 235, 0.587);
            border-radius: 8px;
            overflow: hidden;
            width: 300px;
            max-width: 100%;
        }

        .card-header {
            background-color: #8dcbf4;
            color: #fff;
            padding: 2px;
            text-align: center;
        }

        .card-body {
            padding: 20px;
            background-color: #58b6f5;
            color: #fff
        }

        p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h1>User Profile</h1>
        </div>
        <div class="card-body">
            <p><strong>Nama:</strong> {{ $name }}</p>
            <p><strong>ID:</strong> {{ $id }}</p>
        </div>
    </div>
</body>
</html>
