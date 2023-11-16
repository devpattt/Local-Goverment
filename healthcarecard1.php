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
            background-color: #ff6600;
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
            color: #ff6600;
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
            <h1><span>Issuance</span> Of Health Certificate</h1>
            <p>
            The issuance of the Health Certificate extends to individuals engaged in the operation and administration of an establishment, irrespective of their specific roles. 
            This is contingent upon satisfying all the stipulated criteria established by the Quezon City Health Department.
            </p>
            <li>Renewal applicants seeking clinical laboratory services for the Health Certificate can utilize the laboratory facilities provided by the QCHD Clinical/In-House Laboratory. 
                This process is facilitated through the Quezon City Online Registration & Application.</li>
            <li>Renewal applicants intending to obtain clinical laboratory services for the Health Certificate can access the laboratory facilities offered by any QCHD 
                Clinical/In-House Laboratory through a walk-in application process.</li>
            <li>Provision of Health Certificate Recognized Laboratory Services for new applicants involves utilizing laboratory services from an external
                 laboratory through the Quezon City Online Registration & Application process.
            </li>
            <li>Renewal applicants seeking Recognized Laboratory Services for the Health Certificate can access 
                laboratory facilities from an external laboratory through the Quezon City Online Registration & Application process.</li>
            <li>Renewal applicants intending to obtain Recognized Laboratory Services for the Health Certificate can utilize laboratory
                 services from an external laboratory through a walk-in application process.</li>
        </div>
    </header>

</body>

</html>