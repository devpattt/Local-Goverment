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

*{
    padding: 0;
    margin: 0;
    outline: none;
    border: none;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

img{
    width: 100%;
    display: flex;
}

a{
    text-decoration: none;
}

body{
    font-family: 'Poppins', sans-serif;
    background-color: #18181B;
}

nav{
    max-width: 1200px;
    margin: auto;
    padding: 2rem 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
}

.nav-logo{
    max-width: 100px;
}

.nav-links{
    list-style: none;
    display: flex;
    align-items: center;
    gap: 3rem;
}

.link a{
    position: relative;
    padding-bottom: 0.75rem;
    color: #fff;
}

.link a::after{
    content: "";
    position: absolute;
    height: 2px;
    width: 0;
    bottom: 0;
    left: 0;
    background-color: #1d4ed8;
    transition: all 0.3s ease;
}

.link a:hover::after{
    width: 70%;
}

.btn{
    padding: 1rem 2rem;
    font-size: 1rem;
    color: #fff;
    background-color: #1d4ed8;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
    text-align: center;
    position: center;

}

.btn:hover{
    background-color:#ff6600;
}

.container{
    max-width: 1200px;
    margin: auto;
    padding: 5rem 2rem;
}

.blur{
    position: absolute;
    box-shadow: 0 0 1000px 50px #1d4ed8;
    z-index: -100;
}

header{
    position: relative;
    padding-top: 2rem;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    gap: 2rem;
}

header .content h4{
    margin-bottom: 1rem;
    color: #ccc;
    font-size: 1rem;
    font-weight: 600;
}

header .content h1{
    color: #ff6600;
    margin-bottom: 1rem;
    font-size: 3rem;
    font-weight: 700;
    line-height: 4rem;
}

header .content h1 span{
    -webkit-text-fill-color: transparent;
    -webkit-text-stroke: 1px #fff;
}

header .content p{
    margin-bottom: 2rem;
    color: #ccc;
}

header .image{
    position: relative;
}

header .image::before{
    content: "o";
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    font-size: 38rem;
    font-weight: 400;
    line-height: 20rem;
    color: #1d4ed8;
    opacity: 0.2;
    z-index: -100;
}

header .image img{
    max-width: 600px;
    margin: auto;
}

section .header{
    margin-bottom: 1rem;
    color: #fff;
    text-align: center;
    font-size: 2.25rem;
    font-weight: 600;
}

.features{
    margin-top: 4rem;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
}

.features .card{
    background-color: #27272a;
    padding: 1rem;
    border: 2px solid transparent;
    border-radius: 15px;
    transition: all 0.3s ease;
}

.features .card:hover{
    background-color: #323232;
    border-color: #fff;
}

.features .card span{
    display: inline-block;
    background-color: #1e40af;
    padding: 2px 9px;
    margin-bottom: 1rem;
    font-size: 1.75rem;
    color: #fff;
    border-radius: 5px;
}

.features .card h4{
    margin-bottom: 0.5rem;
    color: #fff;
    font-size: 1.2rem;
    font-weight: 600;
}

.features .card p{
    color: #ccc;
    margin-bottom: 1rem;
}

.features .card a{
    color: #fff;
    transition: all 0.3s ease;
}

.features .card a:hover{
    color: #ff6600;
}

.sub-header{
    max-width: 600px;
    margin: auto;
    text-align: center;
    color: #ccc;
}

.pricing{
    margin-top: 4rem;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}

.pricing .card{
    padding: 3rem 2rem;
    background-color: #27272a;
    display: flex;
    flex-direction: column;
    border: 2px solid transparent;
    border-radius: 15px;
    transition: all 0.3s ease;
}

.pricing .card:hover{
    background-color: #323232;
    border-color: #fff;
}

.pricing .card .content{
    flex: 1;
    margin-bottom: 2rem;
}

.pricing .card h4{
    margin-bottom: 1rem;
    color: #fff;
    font-size: 1.2rem;
    font-weight: 500;
}

.pricing .card h3{
    color: #fff;
    padding-bottom: 1rem;
    margin-bottom: 2rem;
    font-size: 2rem;
    font-weight: 600;
    border-bottom: 2px dashed #fff;
}

.pricing .card p{
    color: #fff;
    margin-bottom: 0.75rem;
}

.pricing .card p i{
    color: #ccc;
    font-size: 1.2rem;
    margin-right: 0.3rem;
}

.pricing .card button{
    color: #fff;
    background-color: transparent;
    border: 2px solid #fff;
}

.pricing .card button:hover{
    background-color: #1e40af;
    border-color: #1e40af;
}

footer{
    position: relative;
    display: grid;
    grid-template-columns: 400px repeat(3, 1fr);
    gap: 2rem;
}

footer .column .logo{
    max-width: 100px;
    margin-bottom: 2rem;
}

footer .column p{
    color: #ccc;
    margin-bottom: 2rem;
}

footer .column .socials{
    display: flex;
    align-items: center;
    gap: 1rem;
}

footer .column .socials a{
    color: #ccc;
    border: 1px solid #ccc;
    padding: 5px 10px;
    font-size: 1.25rem;
    border-radius: 100%;
    transition: all 0.3s ease;
}

footer .column .socials a:hover{
    color: #fff;
    background-color: #1d4ed8;
    border-color: #1d4ed8;
}

footer .column h4{
    color: #fff;
    margin-bottom: 2rem;
    font-size: 1.2rem;
    font-weight: 500;
}

footer .column > a{
    display: block;
    color: #ccc;
    margin-bottom: 1rem;
    transition: all 0.3s ease;
}

footer .column > a:hover{
    color: #1d4ed8;
}

.copyright{
    max-width: 1200px;
    margin: auto;
    padding: 1rem;
    color: #fff;
    font-size: 0.8rem;
    text-align: center;
}

@media (width < 900px){
    .nav-links{
        display: none;
    }
    header{
        grid-template-columns: repeat(1, 1fr);
    }
    header .image{
        grid-area: 1/1/2/2;
    }
    .features{
        grid-template-columns: repeat(2, 1fr);
    }
    .pricing{
        grid-template-columns: repeat(2, 1fr);
    }
    footer{
        grid-template-columns: 1fr 200px;
    }
}

@media (width < 600px){
    header .image::before{
        display: none;
    }

    .features{
        grid-template-columns: repeat(1, 1fr);
    }

    .pricing{
        grid-template-columns: repeat(1, 1fr);
    }

    footer{
        grid-template-columns: 1fr 150px;
    }
}


    </style>
</head>

<body>

    <nav>
        <div class="nav-logo">
            <a href="#">
                <img src="img/Quezon_City.svg.png">
            </a>
        </div>

        <ul class="nav-links">
            <li class="link"><a href="#">Home</a></li>
            <li id="link1" class="link"><a href="#">Guides</a></li>
            <li id="link2" class="link"><a href="#">Programs</a></li>
            <li id="link3" class="link"><a href="#">About</a></li>
        </ul>
        <a href="index.php" class="btn btn-info" role="button">Home</a>

    </nav>

    <header class="container">
        <div class="content">
            <span class="blur"></span>
            <span class="blur"></span>
            <H1><span>Health,</span> Care Management</H1>
            <h4>Health for all, health in the hands of the people.</h4>
            <p>
            The primary point of contact for public health in Quezon City is the Quezon City Health Department (QCHD). It plays a crucial role in delivering vital healthcare services and addressing the comprehensive well-being of the city's residents. The QCHD is dedicated to safeguarding the safety and health of all communities within the city by engaging in activities such as education, 
            policy formulation, and research to prevent diseases and injuries.
            </p>
        </div>
        <div class="image">
            <img src="">
        </div>
    </header>

    <section class="container">
        <h2 class="header">GUIDES</h2>
        <div class="features">
            <div class="card">
                <h4>Issuance Of Health Certificate</h4>
                <p>
                Official document granting confirmation of health compliance, often for employment or clinical purposes.
                </p>
                <a href="healthcarecard1.php">View More<i class="ri-arrow-right-line"></i></a>
            </div>

            <div class="card">
                <h4>Issuance Of Yellow Health Certificate</h4>
                <p>
                Issuing official health compliance documents, typically for employment purposes.
                </p> <br>
                <a href="healthcarecard2.php">View More <i class="ri-arrow-right-line"></i></a>
            </div>

            <div class="card">
                <h4>Issuance Of Sanitary Permit (SP)</h4>
                <p>
                Official approval for meeting sanitary standards, commonly required for various establishments.
                </p>
                <a href="healthcarecard3.php">View More<i class="ri-arrow-right-line"></i></a>
            </div>

            <div class="card">
                <h4>Application For Health Occupancy Permits</h4>
                <p>
                Requesting official approval for building suitability and compliance with submitted plans.
                </p> <br>
                <a href="healthcarecard4.php">View More <i class="ri-arrow-right-line"></i></a>
            </div>

            <div class="card">
                <h4>Certificate Of Water Potability</h4>
                <p>
                Official documentation confirming that water quality meets established drinking water standards.
                </p><br>
                <a href="healthcarecard5.php">View More<i class="ri-arrow-right-line"></i></a>
            </div>

            <div class="card">
                <h4>Issuance Of Death Certificate</h4>
                <p>
                Official process of providing a document confirming an individual's death.
            </p><br>
            <br>
                <a href="healthcarecard6.php">View More<i class="ri-arrow-right-line"></i></a>
            </div>

            <div class="card">
                <h4>Medical Consultation</h4>
                <p>
                Healthcare provider's review of medical history, examination of the patient, and provision of care recommendations.
                </p><br>
                <a href="healthcarecard7.php">View More<i class="ri-arrow-right-line"></i></a>
            </div>

            <div class="card">
                <h4>Issuance Of Pre-Marriage Counseling Certificate</h4>
                <p>
                Issuing a certificate after completing mandatory pre-marriage counseling sessions.
                </p>
                <a href="healthcarecard8.php">View More<i class="ri-arrow-right-line"></i></a>
            </div>
        </div>
    </section>

    <section class="container">
        <h2 class="header">PROGRAMS</h2>
        <p class="sub-header">
           <!--lagyan-->
        </p>
        <div class="pricing">
            <div class="card">
                <div class="content">
                    <h4>Nutrition Program</h4><br>
                    <h3></h3>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        General Operation Timbang
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Malnutrition Rehabilitation
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Harmonized Deworming
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Breastfeeding support groups
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Nutrition Advocacy
                    </p>
                </div>
                <a href="HCMdetails.php" class="btn">More Details</a>
            </div>
            <div class="card">
                <div class="content">
                    <h4>Maternal & Child Care Program</h4>
                    <h3></h3>
                    <p>
                        <i class="ri-checkbox-circle-line"></i> 
                        Check – ups and consultation
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Simple laboratory
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Tetanus Toxoid immunization
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Promotion of exclusive Breastfeeding
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Oral health care
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        PhilHealth enrollment
                    </p>
                </div>
                <a href="HCMdetails.php" class="btn">More Details</a>
            </div>
            <div class="card">
                <div class="content">
                    <h4>Community Based Mental Health</h4>
                    <h3></h3>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Screening of symptoms of mental illness
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Referral of patients for evaluation and management
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Provision of Psychotropic medicines
                    </p>
                    <p>
                        <i class="ri-checkbox-circle-line"></i>
                        Provision of information on caring for one’s mental health
                    </p>
                </div>
                <a href="HCMdetails.php" class="btn">More Details</a>
            </div>
        </div>
    </section>

    <footer class="container">
        <span class="blur"></span>
        <span class="blur"></span>
        <div class="column">
            <div class="logo">
                <img src="img/health_img-removebg-preview (1).png">
            </div>
            <p>
            QUEZON CITY HEALTH DEPARTMENT
            </p>
            <div class="socials">
                <a href="#"><i class="ri-facebook-line"></i></a>
                <a href="#"><i class="ri-instagram-line"></i></a>
                <a href="#"><i class="ri-twitter-line"></i></a>
            </div>
        </div>
        <div class="column">
            <h4>About Us</h4>
            <a href="#">Blogs</a>
            <a href="#">Channels</a>
            <a href="#">Sponsors</a>
        </div>
        <div class="column">
            <h4>Contact</h4>
            <a href="#">Contact Us</a>
            <a href="#">Privicy Policy</a>
            <a href="#">Terms & Conditions</a>
        </div>
        <div class="column">
            <h4>Contact</h4>
            <a href="#">Contact Us</a>
            <a href="#">Privicy Policy</a>
            <a href="#">Terms & Conditions</a>
        </div>
    </footer>

    <div class="copyright">
       <!-- lagyan -->
    </div>


    <script>
        function scrollToElement(elementSelector, instance = 0) {
    // Select all elements that match the given selector
    const elements = document.querySelectorAll(elementSelector);
    // Check if there are elements matching the selector and if the requested instance exists
    if (elements.length > instance) {
        // Scroll to the specified instance of the element
        elements[instance].scrollIntoView({ behavior: 'smooth' });
    }
}

const link1 = document.getElementById("link1");
const link2 = document.getElementById("link2");
const link3 = document.getElementById("link3");

link1.addEventListener('click', () => {
    scrollToElement('.header');
});

link2.addEventListener('click', () => {
    // Scroll to the second element with "header" class
    scrollToElement('.header', 1);
});

link3.addEventListener('click', () => {
    scrollToElement('.column');
});
    </script>
</body>

</html>