<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #4688F1;
            text-align: center;
        }
        .header {
            background-color: black;
            color: white;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 40px;
        }
        .card {
            background-color: #1D5DBE;
            padding: 20px;
            border-radius: 10px;
            width: 250px;
            color: white;
            text-align: center;
        }
        .card h2 {
            font-size: 22px;
            margin-bottom: 10px;
        }
        .card p {
            font-size: 16px;
            margin-bottom: 15px;
        }
        .button {
            display: block;
            width: 100%;
            background-color: #E0E7FF;
            color: #1D5DBE;
            border: none;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .button:hover {
            background-color: #bfcdf8;
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }
            .card {
                width: 80%;
            }
        }
    </style>
</head>
<body>
    <div class="header">Admin</div>
    <div class="container">
        <div class="card">
            <h2>Upload</h2>
            <p>Students data</p>
            <button class="button">First Year</button>
            <button class="button">Second Year</button>
            <button class="button">Third Year</button>
            <button class="button">B. E.</button>
        </div>
        <div class="card">
            <h2>Update</h2>
            <p>Students data</p>
            <button class="button">First Year</button>
            <button class="button">Second Year</button>
            <button class="button">Third Year</button>
            <button class="button">B. E.</button>
        </div>
        <div class="card">
            <h2>Delete</h2>
            <p>Students data</p>
            <button class="button">First Year</button>
            <button class="button">Second Year</button>
            <button class="button">Third Year</button>
            <button class="button">B. E.</button>
        </div>
    </div>
</body>
</html>
