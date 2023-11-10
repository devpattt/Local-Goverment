<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Local Goverment Unit</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/edd0240440.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
    <div id="header">   
        <div class="container">
            <nav>
                <img src="img/Quezon_City.svg.png" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <a href="logout.php" class="logout-button">Logout</a>
                    <i class="fas fa-times" onclick="closemenu()"></i>
                </ul>
                <i class="fas fa-bars" onclick="openmenu()"></i>
            </nav>
            <!--HEADER-->
            <div class="header-text">
                <p></p>
                <h1><span> Local<br> Goverment</span><br> Unit</h1>

                <div class="social-icons">
                    <a href="https://www.google.com/search?q=nigga+memes&tbm=isch&ved=2ahUKEwjTpoTOwaqCAxW12zgGHdwvDUYQ2-cCegQIABAA&oq=nigga+memes&gs_lcp=CgNpbWcQAzoHCAAQigUQQzoFCAAQgARQzQFYzRJg2xNoAnAAeACAAYsBiAGgCJIBAzAuOZgBAKABAaoBC2d3cy13aXotaW1nwAEB&sclient=img&ei=ck9GZdOlD7W34-EP3N-0sAQ&bih=821&biw=1600&rlz=1C1VDKB_enPH1075PH1075#imgrc=M7c78S6AhHGjtM"><i class="fab fa-twitter-square"></i></a>
                    <a href="https://www.facebook.com/johncedric.magsadia"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/_vvhen/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
   <!--ABOUT-->
   <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="img/Quezon_City.svg.png">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About <span>Us</span></h1>
                    <h3>Welcome to Local Goverment Unit<br><br></h3>
                    <p>We are more than just a local government entity; we are a family bound by a common purpose – to serve, protect, and uplift the lives of our community members.</p>
                     
                     <div class="tab-title">
                        <p class="tab-links active-link" onclick="opentab('developers')">Developers</p>
                        <p class="tab-links" onclick="opentab('location')">Location</p>
                        <p class="tab-links" onclick="opentab('contacts')">Contacts</p>
                     </div>

                     <div class="tab-contents active-tab" id="developers">
                        <ul>
                            <li><span>Project Team</span><br>Nobleza patrick, Rebamontan Joyvie, Cristobal Aeron, Bordamonte Jobert, <br> 
                        Trinidad Paul William, Bazar John Nathaniel, Canellas Sherwin, Valete Marjorie<br>
                        Cris Mortes, Magsadia John Cedric, Del Moro Jhon Dave, Galang Rheyvin<br>
                        Vega John Christian, Mendoza Andrey, Panganiban Mariz Estella, Aco Alexis<br>
                        Junio Joemel, Gullim Justine, Padayao Reneelet, Maloloyon Venson<br>
                        Gallardo Winslet  </li>

                        </ul>
                     </div>
                     <div class="tab-contents" id="location">
                        <ul>
                            <li><span>Quezon City Hall</span><br>Mayaman, Diliman, Lungsod Quezon, Kalakhang Maynila</li>
        
                        </ul>
                     </div>  <div class="tab-contents" id="contacts">
                        <ul>
                            <li><span>Mobile Number</span><br>09168328108</li>
                            <li><span>Email</span><br>patsandesu@gmail.com</li>
                        
                        </ul>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <!--SERVICES-->
    <div id="services">
        <div class="container">
            <h1 class="sub-title">Our <span>Services</span></h1>
            <div class="services-list">

                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Real Property Tax Management</h2>
                    <p>Use outline improvements and objectives for managing real property taxes efficiently.</p>
                    <a href="#">Learn More</a>
                </div> 
                 <div>
                 <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Land Use and Zoning</h2>
                    <p>Better land use and zoning management detail plans and activities.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Public Market and Vendors Management</h2>
                    <p>Document improvements in managing public markets and vendors.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Financial Management and Budgeting</h2>
                    <p>Keep track of adjustments and developments in the budgeting and financial management processes.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Human Resource Payroll</h2>
                    <p>Describe enhancements in human resource management and payroll systems.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <a href="election&voter.php" class="box-link">
                    <h2>Election and Voter Management</h2>
                    <p>Outline strategies and improvements in election and voter management.    </p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <a href="solidwastemanagement.php" class="box-link">
                    <h2>Solid Waste Management</h2>
                    <p>Record initiatives and progress related to solid waste management</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Infrastructure and Public Works</h2>
                    <p>Track Projects and developments in infrastructure and public wors management.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Social Welfare and Community Development</h2>
                    <p>Describe Programs and improvements in social welfare and community development.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Health Services and Sanitation</h2>
                    <p>Document enhancements in health services and sanitation management</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Document Management and Records</h2>
                    <p>Detail improvements in document management and record-keeping.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <a href="gismapping.php" class="box-link">
                    <h2>GIS Mapping</h2>
                    <p>Record advancements in GIS mapping technology and its applications.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Community Engagement and Communication</h2>
                    <p>Document efforts to promote accessibility and inclusion within the municipality.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Accessibility Inclusion</h2>
                    <p>Document efforts to promote accessibility and inclusion within the municipality.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Analytics and Reporting</h2>
                    <p>Describe the implementation of analytics and reporting tools for data-driven decision-making.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Integration and Data Sharing</h2>
                    <p>Track Progress in integrating systems and sharing data among municipal departments.</p>
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!---PROJECTS-->
    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">Latest <span>Project</span></h1>
            <div class="work-list">
                <div class="work">
                    <img src="img/TULEEEEEEEEEEE.jpg">
                    <div class="layer">
                        <h3>Libreng Tuli 2023</h3>
                        <p>Libreng tuli para sa ating mga bagets!</p>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                
                <div class="work">
                    <img src="img/EMERGENCY AWARENESS.jpg">
                    <div class="layer">
                        <h3>Emergency Awareness</h3>
                        <p>Conducts an Emergency Response Training</p>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>


                <div class="work">
                    <img src="img/PABAHAY.jpg">
                    <div class="layer">
                        <h3>Housing Project</h3>
                        <p>Libreng pabahay para mga kapus-palad</p>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">Back to top</a>
        </div>
    </div>


    <!--CONTACTS-->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title"> Contact<span> Us</span></h1>
                    <p><i class="fa-solid fa-share"></i>lgu@kdnfandfndpfipsda</p>
                    <p><i class="fa-solid fa-phone"></i></i>0123456789</p>

                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                       
                    </div>
                    <a href="img/Resume.pdf" download class="btn btn2">Download CV</a>
                </div>
                <div class="contact-right">
                    <form>
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>
                </div>

            </div>
        </div>
        <div class="copyright">
            <p>Copyright</p>
        </div>
    </div>


    <script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(tabname){
            for(tablink of tablinks){
                tablink.classList.remove("active-link");
            }
            for(tabcontent of tabcontents){
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }
    </script>

    <script>
        var sidemeu = document.getElementById('sidemenu');
        function openmenu(){
            sidemeu.style.right ="0";
        }
        function closemenu(){
            sidemeu.style.right ="-200px";
        }
    </script>

</body>
</html>