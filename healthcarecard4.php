<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Health Care Management</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

        * {
            padding: 0;
            margin: 0;
            outline: none;
            border: none;
            box-sizing: border-box;
        }

        img {
            width: 100%;
            display: flex;
        }

        a {
            text-decoration: none;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #18181B;
        }

        nav {
            max-width: 1200px;
            margin: auto;
            padding: 2rem 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
        }

        .nav-logo {
            max-width: 100px;
        }

        .btn {
            padding: 1rem 2rem;
            font-size: 1rem;
            color: #fff;
            background-color: #1d4ed8;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #1e40af;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 5rem 2rem;
        }

        header {
            position: relative;
            padding-top: 2rem;
            text-align: center; /* Center text in the header */
        }

        header .content h4 {
            margin-bottom: 1rem;
            color: #ccc;
            font-size: 1rem;
            font-weight: 600;
        }

        header .content h1 {
            color: #fff;
            margin-bottom: 1rem;
            font-size: 3rem;
            font-weight: 700;
            line-height: 4rem;
        }

        header .content h1 span {
            -webkit-text-fill-color: transparent;
            -webkit-text-stroke: 1px #fff;
        }

        header .content p {
            margin-bottom: 2rem;
            color: #ccc;
        }

        header .content li {
            margin-bottom: 2rem;
            color: #ccc;
        }

        
        header .content ol {
            margin-bottom: 2rem;
            color: #ccc;
        }

        section .header {
            margin-bottom: 1rem;
            color: #fff;
            text-align: center;
            font-size: 2.25rem;
            font-weight: 600;
        }

    </style>
</head>

<body>

    <nav>
        <div class="nav-logo">
            <a href="#">
                <img src="img/Quezon_City.svg.png" alt="Quezon City Logo">
            </a>
        </div>
        <a href="healthcaremain.php" class="btn btn-info" role="button">Go back</a>
    </nav>

    <header class="container">
        <div class="content">
            <h1><span>Issuance</span> For Health Occupancy Permits</h1>
            <p>The Health Occupancy Permit is an official document issued by the City Health Officer, affirming that the building meets the required standards and is in a healthy and appropriate living condition as outlined in the submitted plans and specifications.</p>
            <p><strong>Issuance of Health Occupancy Permit for New Sanitary Permit (For Green Building Certification Application)</strong></p>
        </header>

</body>

</html>