<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Goverment Unit</title>
    <style>
        body {
            background-color: #f1f1f1;
            padding: 0;
            margin: 0;
            overflow-x: hidden;
            text-align: center;
            font-family: "Poppins", sans-serif;
        }

        @media (max-width: 870px) {
            .header {
                min-height: 800px;
                height: 100vh;
            }

            header ul {
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
            }

            header li {
                display: inline;
                padding: 0 2px;
                width: 50%;
                top: 95%;
                transform: translate(-5%, -10%);
                transition: 1s 0.8s ease-in-out;
            }

            header li a {
                padding: 0;
                font-size: 14px;
            }

            header li img {
                width: 30px;
                height: auto;
                margin-top: 0;
            }
        }

        header {
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 0 3px #000;
        }

        header li {
            display: inline;
            padding-left: 45px;
        }

        header li a {
            color: #333;
            text-decoration: none;
            padding: 13px;
            transition: .3s ease;
        }

        header li a:hover {
            color: royalblue;
        }

        header ul #contact a {
            color: #fff;
            background-color: royalblue;
            border-radius: 10px;
            float: right;
            margin-top: -10px;
        }

        header ul #contact a:hover {
            background-color: red;
        }

        .active {
            color: royalblue;
        }

        header li img {
            width: 80px;
            float: left;
            margin-top: -20px;
        }

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
            text-transform: capitalize;
            transition: .2s linear;
        }

        .container {
            background: liners-gradient(45deg, blueviolet, lightgreen);
            padding: 15px 9%;
            padding-bottom: 100px;
        }

        .container .heading {
            text-align: center;
            padding-bottom: 15px;
            color: #444;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 2);
            font-size: 50px;
        }

        .container .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
            gap: 15px;
        }

        .container .box-container .box {
            box-shadow: 0 5px 10px rgba(0, 0, 0, 2);
            border-radius: 5px;
            background: #fff;
            text-align: center;
            padding: 30px 20px;
        }

        .container .box-container .box img {
            height: 80px;
        }

        .container .box-container .box h3 {
            color: #444;
            font-size: 22px;
            padding: 10px 0;
        }

        .container .box-container .box p {
            color: #777;
            font-size: 15px;
            line-height: 1.8;
        }

        .container .box-container .box .btn {
            margin-top: 10px;
            display: inline-block;
            background: royalblue;
            color: #fff;
            font-size: 17px;
            border-radius: 5px;
            padding: 8px 25px;
        }

        .container .box-container .box .btn:hover {
            letter-spacing: 1px;
            background-color: red;

        }

        .container .box-container .box:hover {
            box-shadow: 0 10px 15px rgba(0, 0, 0, .3);
            transform: scale(1.03);
        }
    </style>
</head>

<body>

    <header>
        <ul>
            <li><img src="img/Quezon_City.svg.png" alt="logo"></li>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">About Us</a></li>
            <li id="contact"><a href="#">Contact Us</a></li>
        </ul>
    </header>


    <div class="container">

        <h1 class="heading">Our Services</h1>

        <div class="box-container">

            <div class="box">
                <img src="img/undraw_partying_re_at7f.svg" alt="icon">
                <h3>Citizen Services and Engagement</h3>
                <p>potanginamo jumiel tiongson</p>
                <a href="#" class="btn">readmore</a>
            </div>

            <div class="box">
                <img src="img/undraw_coding_re_iv62.svg" alt="icon">
                <h3>Real Propery Tax Management</h3>
                <p>wqertyuioslkjhgfdmnbvcjhgf</p>
                <a href="#" class="btn">readmore</a>
            </div>

            <div class="box">
                <img src="img/undraw_working_re_ddwy.svg" alt="icon">
                <h3>Business Permit and Licensing</h3>
                <p>wqertyuioslkjhgfdmnbvcjhgf</p>
                <a href="#" class="btn">readmore</a>
            </div>

            <div class="box">
                <img src="img/undraw_house_searching_re_stk8.svg" alt="icon">
                <h3>Land Use and Zoning</h3>
                <p>wqertyuioslkjhgfdmnbvcjhgf</p>
                <a href="#" class="btn">readmore</a>
            </div>

            <div class="box">
                <img src="img/undraw_factory_dy-0-a.svg" alt="icon">
                <h3>Public Market and Vendors</h3>
                <p>wqertyuioslkjhgfdmnbvcjhgf</p>
                <a href="#" class="btn">readmore</a>
            </div>

            <div class="box">
                <img src="img/undraw_dev_focus_re_6iwt.svg" alt="icon">
                <h3>Financial and Budgeting Management</h3>
                <p>wqertyuioslkjhgfdmnbvcjhgf</p>
                <a href="#" class="btn">readmore</a>
            </div>

            <div class="box">
                <img src="img/undraw_group_selfie_re_h8gb.svg" alt="icon">
                <h3>HUman Resources and Payroll</h3>
                <p>wqertyuioslkjhgfdmnbvcjhgf</p>
                <a href="#" class="btn">readmore</a>
            </div>

            <div class="box">
                <img src="img/undraw_security_on_re_e491.svg" alt="icon">
                <h3>Eelction and Voter Management</h3>
                <p>wqertyuioslkjhgfdmnbvcjhgf</p>
                <a href="#" class="btn">readmore</a>
            </div>

            <div class="box">
                <img src="" alt="">
                <h3>Service 9</h3>
                <p>wqertyuioslkjhgfdmnbvcjhgf</p>
                <a href="#" class="btn">readmore</a>
            </div>

            <div class="box">
                <img src="" alt="">
                <h3>Service 10</h3>
                <p>wqertyuioslkjhgfdmnbvcjhgf</p>
                <a href="#" class="btn">readmore</a>
            </div>

            <div class="box">
                <img src="" alt="">
                <h3>Service 11</h3>
                <p>wqertyuioslkjhgfdmnbvcjhgf</p>
                <a href="#" class="btn">readmore</a>
            </div>

            <div class="box">
                <img src="" alt="">
                <h3>Service 12</h3>
                <p>wqertyuioslkjhgfdmnbvcjhgf</p>
                <a href="#" class="btn">readmore</a>
            </div>

        </div>
    </div>
    </div>
    </div>
    <footer>
        <div class="container-fluid" style="width: 100%; padding: 0px">
            <div class="row pt-5 pr-5" id="login_footer" style="width: 100%; margin: 0px">
                <div class="col-md-3">
                    <b>Quezon City</b>
                    <br>
                    <br>
                    <small>
                        For any inquiries, please call 122 or email
                        <br>
                        helpdesk@quezoncity.gov.ph
                    </small>



                </div>
    </footer>
</body>

</html>