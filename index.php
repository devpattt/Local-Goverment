
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Local Goverment Unit</title>
    <link rel="stylesheet" href="style2.css">
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
                    <i class="fas fa-times" onclick="closemenu()"></i>
                </ul>
                <i class="fas fa-bars" onclick="openmenu()"></i>
            </nav>
            <!--header-->
            <div class="header-text">
                <p></p>
                <h1><span> Local<br> Goverment</span><br> Unit</h1>

                <div class="social-icons">
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--About-->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="img/Quezon_City.svg.png">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About <span>Us</span></h1>
                    <h3>Hello, Welcome to Local Goverment Unit<br><br></h3>
                    <p>We are more than just a local government entity; we are a family bound by a common purpose – to serve, protect, and uplift the lives of our community members.</p>
                     
                     <div class="tab-title">
                        <p class="tab-links active-link" onclick="opentab('developers')">Developers</p>
                        <p class="tab-links" onclick="opentab('location')">Location</p>
                        <p class="tab-links" onclick="opentab('contacts')">Contacts</p>
                     </div>

                     <div class="tab-contents active-tab" id="developers">
                        <ul>
                            <li><span>Project Team</span><br>Patrick Nobleza, Joyvie Rebamontan, Cristobal Aeron, Bordamonte Jobert, <br> 
                        Trinidad Paul William, Bazar John Nathaniel, Canellas Sherwin, Valete Marjorie.</li>
                           
                            

                        </ul>
                     </div>
                     <div class="tab-contents" id="location">
                        <ul>
                            <li><span>Earth</span><br>Sa lugar kung saan wala ka, kung saan wala si bazar,<br> kung saan tahimik na nag yoyosi si sherwin.</li>
        
                        </ul>
                     </div>  <div class="tab-contents" id="contacts">
                        <ul>
                            <li><span>Mobile Number</span><br>1234567777890</li>
                        
                        </ul>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <!--services section-->
    <div class="services">
        <div class="container">
            <h1 class="sub-title">Our <span>Services</span></h1>
            <div class="services-list">
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Citizen Services Engagement</h2>
                    <p>This will include information, objectives, and developments related to improving citizen services and involvement within municipality.</p>
                    <a href="#">Read More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Real Property Tax Management</h2>
                    <p>Use outline improvements and objectives for managing real property taxes efficiently.
Business Permit and Licensing: Keep up with new innovations and improvements in the administration of business licenses and permits.</p>
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
                    <h2>Public Market and Vendors</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo consequuntur neque voluptate. Eum tempore reiciendis placeat.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Financial and Budgeting Management</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo consequuntur neque voluptate. Eum tempore reiciendis placeat.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>HUman Resources and Payroll</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo consequuntur neque voluptate. Eum tempore reiciendis placeat.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Eelction and Voter Management</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo consequuntur neque voluptate. Eum tempore reiciendis placeat.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Eelction and Voter Management</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo consequuntur neque voluptate. Eum tempore reiciendis placeat.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Eelction and Voter Management</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo consequuntur neque voluptate. Eum tempore reiciendis placeat.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Eelction and Voter Management</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo consequuntur neque voluptate. Eum tempore reiciendis placeat.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Eelction and Voter Management</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo consequuntur neque voluptate. Eum tempore reiciendis placeat.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Eelction and Voter Management</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo consequuntur neque voluptate. Eum tempore reiciendis placeat.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Eelction and Voter Management</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo consequuntur neque voluptate. Eum tempore reiciendis placeat.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Eelction and Voter Management</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo consequuntur neque voluptate. Eum tempore reiciendis placeat.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Eelction and Voter Management</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo consequuntur neque voluptate. Eum tempore reiciendis placeat.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Eelction and Voter Management</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo consequuntur neque voluptate. Eum tempore reiciendis placeat.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Eelction and Voter Management</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo consequuntur neque voluptate. Eum tempore reiciendis placeat.</p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Eelction and Voter Management</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo consequuntur neque voluptate. Eum tempore reiciendis placeat.</p>
                    <a href="#">Learn More</a>
                </div><div>
                <img src="img/Quezon_City.svg.png" class="logo">
                    <h2>Eelction and Voter Management</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo consequuntur neque voluptate. Eum tempore reiciendis placeat.</p>
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!---Portfolio Design-->
    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">Latest <span>Project</span></h1>
            <div class="work-list">
                <div class="work">
                    <img src="img/CITIZEN-removebg-preview.png">
                    <div class="layer">
                        <h3>Online Shopping App</h3>
                        <p>The app connects you the talented people around the world. Download it from play store</p>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                
                <div class="work">
                    <img src="img/socialmedia.png">
                    <div class="layer">
                        <h3>Social Media App</h3>
                        <p>The app connects you the talented people around the world. Download it from play store</p>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>


                <div class="work">
                    <img src="img/musicapp.png">
                    <div class="layer">
                        <h3>Music App</h3>
                        <p>The app connects you the talented people around the world. Download it from play store</p>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See More</a>
        </div>
    </div>


    <!--contact-->
    <div class="contact">
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
                    <a href="img/@Shakku Resume.pdf" download class="btn btn2">Download CV</a>
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