<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Local Goverment Unit</title>
    <link rel="stylesheet" href="solidwaste.css">
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
                    <a href="index.php" class="home-button">Home</a>
                    <i class="fas fa-times" onclick="closemenu()"></i>
                </ul>
                <i class="fas fa-bars" onclick="openmenu()"></i>
            </nav>
            <!--HEADER-->
            <div class="header-text">
                <p></p>
                <h1><span> Solid<br> Waste</span><br> Management</h1>
            </div>
        </div>
    </div>
   <!--ABOUT-->
   <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="img/garbage-truck-clipart-design-illustration-free-png.webp">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About <span>Us</span></h1>
                    <h3>Welcome to Solid Waste Management<br><br></h3>
                    <p>"We are more than just a solid waste management organization; we are a dedicated team bound by a common purpose – to preserve, clean, and enhance the environment of our community. We are committed to managing waste responsibly, ensuring a cleaner and healthier future for all our residents."</p>
                     
                     <div class="tab-title">
                        <p class="tab-links active-link" onclick="opentab('developers')">Schedule</p>
                        <p class="tab-links" onclick="opentab('location')">Location</p>
                        <p class="tab-links" onclick="opentab('contacts')">Contacts</p>
                     </div>

                     <div class="tab-contents active-tab" id="developers">
                        <ul>
                            <li><span> Monday to Saturday </span> <br> 7:00 AM to 5:00 PM </li>

                        </ul>
                     </div>
                     <div class="tab-contents" id="location">
                        <ul>
                            <li><span>Quezon City </span><br>Kung saan maraming basura</li>
        
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
                <img src="img/bluetruck.webp" class="truck">
                    <h2>LightBlue Truck ni Tanod</h2>
                    <p>snfsanfnsafnisanfisf</p>
                    <a href="#">Learn More</a>
                </div> 
                 <div>
                 <img src="img/yellowtruck.webp" class="truck">
                    <h2>Yellow Truck ni Tanod</h2>
                    <p>ughhhh</p>
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