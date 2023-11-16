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
            <h1><span>Issuance</span> Of Sanitary Permit</h1>
            <p>
            The Sanitary Permit is a written authorization or certification issued by the City Health Officer which signifies the establishment’s compliance with the existing requirements upon inspection or evaluation by the Sanitation Inspector or Evaluator.</p>
            <p><strong>Issuance of Provisional Sanitary Permit for New Businesses</strong></p>
            <li>The Provisional Sanitary Permit is a temporary written certification granted by the City Health Officer to new establishments. This permit allows for the partial commencement of business activities, providing sufficient time for compliance with current sanitary requirements following assessment or inspection by the Sanitation Inspector. The validity of this authorization extends until the specified period.</li>
            <p><strong>Issuance of Sanitary Permit for Newly Registered Business and Business with Renewal Status through the Quezon City Online Registration & Application and via Walk -in Application</strong></p>
            <li>The Sanitary Permit is an official document issued by the City Health Officer, indicating that the establishment has met the necessary requirements as determined through inspection or evaluation by the Sanitation Inspector or Evaluator.</il>
        </div>
    </header>

</body>

</html>