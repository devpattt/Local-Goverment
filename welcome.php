<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        body {
            background-image: url('img/The_Heart_of_Quezon_City.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .logo {
            max-width: 200px;
            height: auto;
        }

        .logo-text {
            color: #fff;
            margin-top: 10px;
            max-width: 200px;
            text-align: center;
        }

        h2 {
            color: #fff;
            margin-top: 20px;
        }

        .button-container {
            display: flex;
            flex-direction: row; /* Change the flex direction to horizontal */
            align-items: center; /* Center the buttons vertically */
            margin-top: 40px;
        }

        .button {
            margin: 0 10px; /* Add horizontal margin to the buttons */
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s; /* Add a smooth transition for the background color */
        }

        .button:hover {
            background-color: #0056b3; /* Change the background color on hover */
        }

        /* Add any additional CSS styles as needed */

    </style>
</head>
<body>
    <div class="container">
        <img class="logo" src="img/Quezon_City.svg.png" alt="Your Logo">
        <h2>Local Government Unit</h2>
        <div class="logo-text">Your Text Below Logo</div>
        <div class="button-container">
            <button class="button">ADMIN</button>
            <button class="button">USER</button>
        </div>
    </div>
</body>
</html>
