<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

    <title>Health Care Management</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


.home-button-container {
            display: flex;
            align-items: center; /* Center vertically */
        }

        .home-button {
            text-decoration: none;
            color: #fff;
            font-size: 1rem;
            margin-right: 20px;
            text-align: center;
            padding: 10px 15px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
            font-family: 'Poppins', sans-serif;
        }

        .home-button:hover {
            background-color: #115472; /* Change background color on hover */
            text-decoration: underline;
        }

body{
    font-family: 'Poppins', sans-serif;
    display: flex;
    justify-content: center;
    height: 100vh;
    color: #fff;
    background-color: #202020;
    padding: 50px;
}

body .container{
    max-width: 1000px;
}

body .container header{
    background: url(img/pexels-nikko-tan-133689.jpg) center / cover no-repeat;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 400px;
    padding: 20px 50px 60px;
    border-radius: 16px;
}

body .container header .category{
    font-size: 1.2rem;
    font-weight: bold;
    letter-spacing: 0.3rem;
    text-transform: uppercase;
}

body .container header .info{
    text-align: center;
}

body .container header .info .tags i{
    font-size: 18px;
    margin-right: 4px;
}

body .container header .info .tags span{
    font-size: 0.8rem;
}

body .container header .info .title{
    margin: 20px 0;
    font-size: 3rem;
    font-weight: bold;
}

body .container header .info .subtitle{
    min-width: 70%;
    margin: 0 auto 20px;
    font-size: 1rem;
}

body .details{
    display: flex;
    justify-content: space-between;
    background: rgba(0, 0, 0, 0.14);
    margin-top: 50px;
    padding: 20px 50px;
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(0, 0, 0, 0.68);
}

body .details .item .item-title{
    color: #ccc;
}

body .details .item .item-text{
    margin-top: 12px;
    font-size: 1.5rem;
}

body article{
    margin-top: 50px;
    padding-bottom: 20px;
    line-height: 1.70;
}

body article h4{
    margin-top: 50px;
    margin-bottom: 20px;
    font-size: 1.25rem;
}

body article p{
    margin-bottom: 20px;
    color: #fff;
    font-size: 1.1rem;
}

body article blockquote{
    margin: 40px 0;
    background-color: #181818;
    padding: 30px;
    border-radius: 16px;
}

 /* Style for the collapsible box */
 .collapsible-box1 {
            width: 1000px;
            background-color: #fff;
            overflow: hidden;
            transition: height 0.3s ease; /* Smooth transition effect */
            height: 40px; /* Set an initial height (collapsed state) */
            border-style: solid;
            border-width: 1px;
            border-radius: 2px;

        }
        .collapsible-box2 {
            width: 1000px;
            background-color: #fff;
            overflow: hidden;
            transition: height 0.3s ease; /* Smooth transition effect */
            height: 40px; /* Set an initial height (collapsed state) */
            border-style: solid;
            border-width: 1px;
            border-radius: 2px;

        }

        .collapsible-box3{
            width: 1000px;
            background-color: #fff;
            overflow: hidden;
            transition: height 0.3s ease; /* Smooth transition effect */
            height: 40px; /* Set an initial height (collapsed state) */
            border-style: solid;
            border-width: 1px;
            border-radius: 2px;

        }
        

        .collapsible-box4 {
            width: 1000px;
            background-color: #fff;
            overflow: hidden;
            transition: height 0.3s ease; /* Smooth transition effect */
            height: 40px; /* Set an initial height (collapsed state) */
            border-style: solid;
            border-width: 1px;
            border-radius: 2px;

        }
        
        .collapsible-box5 {
            width: 1000px;
            background-color: #fff;
            overflow: hidden;
            transition: height 0.3s ease; /* Smooth transition effect */
            height: 40px; /* Set an initial height (collapsed state) */
            border-style: solid;
            border-width: 1px;
            border-radius: 2px;

        }
        
        .collapsible-box1:hover {
            background-color: #999; /* Change background color on hover */
        }
        .collapsible-box2:hover {
            background-color: #999; /* Change background color on hover */
        }
        .collapsible-box3:hover {
            background-color: #999; /* Change background color on hover */
        }
        .collapsible-box4:hover {
            background-color: #999; /* Change background color on hover */
        }
        .collapsible-box5:hover {
            background-color: #999; /* Change background color on hover */
        }
        /* Style for the box title */
        .box-title {
            padding: 10px;
            text-align: center;
            cursor: pointer;
            user-select: none; /* Disable text selection for better user experience */
            color: #181818;
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            
        }

        /* Style for the box content */
        .box-content1 {
            padding: 10px;
            font-family: 'Poppins', sans-serif;
            color: #181818;

        }
        .box-content2 {
            padding: 10px;
            font-family: 'Poppins', sans-serif;
            color: #181818;

        }
        .box-content3 {
            padding: 10px;
            font-family: 'Poppins', sans-serif;
            color: #181818;

        }
        .box-content4 {
            padding: 10px;
            font-family: 'Poppins', sans-serif;
            color: #181818;

        }
        .box-content5 {
            padding: 10px;
            font-family: 'Poppins', sans-serif;
            color: #181818;

        }

        @media screen and (max-width: 768px) {
    
    body .container header {
        padding: 10px 20px 30px;
        min-height: 300px;
    }

    body .container header .category {
        font-size: 0.9rem;
    }

    body .container header .info .title {
        font-size: 2.2rem;
    }

    body .container header .info .subtitle {
        font-size: 0.8rem;
        min-width: unset; /* Remove the minimum width */
    }

    body .container .details {
        flex-direction: column;
    }

    body .container .details .item:not(:last-child) {
        margin-bottom: 30px;
    }

    .collapsible-box1,
    .collapsible-box2,
    .collapsible-box3,
    .collapsible-box4,
    .collapsible-box5 {
        width: 100%; /* Adjust width for smaller screens */
    }
}


    </style>
</head>

<body>

    <div class="container">
        <header>
        <div class="home-button-container">
                <a href="index.php" class="home-button"><strong>GO HOME</strong></a>
            </div>
            <div class="info">
                <div class="tags">
                   <!-- <i class="fa-solid fa-tag"></i> -->
                  <!--  <span>Coding, Programming</span> -->
                </div>
                <h1 class="title">QUEZON CITY HEALTH DEPARTMENT</h1>
                <!-- <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi consequatur
                    cupiditate incidunt cumque illo alias, odit dolorem et reprehenderit.</p> -->
            </div>
            
        </header>
        <article>
            <h1>CONTACT INFORMATION</h1>
            <h2>DEPARTMENT OF SANITATION AND CLEANUP WORKS OF QUEZON CITY</h2>
            <li>6th Floor, Building Regulatory Offices (Civic Center D) Mayaman St. Quezon City Hall Compound, Diliman, Quezon City</li>
            <li>8988-4242 loc. 8362</li>
            <li>TFSolidWaste@quezoncity.gov.ph</li>
            <li>fb.com@QCTFSolidWaste</li>
            <li><strong>Office Hours</strong> (Monday to Friday / 8:00 AM – 5:00 PM)</li>  <br>

            <hr>
            <br>
            <h1>ABOUT US</h1>
            <h5>Description</h5>
            <p>The Department of Sanitation and Cleanup Works of Quezon City (DSQC) is the lead department responsible for the City’s sanitation,
                 waste management, compliance with the environmental laws and related rules and regulations, and the administration of a 
                 Comprehensive Environmental Protection Program.</p>
            <h5>Mission</h5>
            <p>To keep Quezon City clean, healthy, and safe.</p>
            <h5>Vision</h5>
            <p>To establish harmonious barangays that are safe, healthy, proactive, sustainable, peaceful,
                transparent, and forward-looking and a community that is inclusive, engaged, respectful of religious and cultural 
                differences, sensitive, and willing to address the challenges faced by vulnerable sectors.</p>
            <h5>Legal Bases</h5>
            <li>City Ordinance No. 3015, S-2020. An Ordinance Renaming The Environmental Protection and Waste Management
                 Department (EPWMD) Into a Department of Sanitation and Cleanup Works of Quezon City (DSQC).</li>
            <li>Republic Act No. 9003, Act Providing For An Ecological Solid Waste Management Program, Creating The Necessary Institutional Mechanisms And Incentives, 
                Declaring Certain Acts Prohibited And Providing Penalties, Appropriating Funds Therefor, And For Other Purposes.</li>
            <li>Ordinance No. SP-2350, S-2014, An Ordinance Providing For The Environmental Protection And Waste Management Code of Quezon City.</li><br>
            <h5>Service Pledge:</h5>
            <p>Provide an efficient solid waste management system for our residents and promote campaigns that help protect our environment. 
                Continue to provide day-to-day reports on our operations by means of social media and to influence our people to be part of our programs. 
                Attend to all residents, clients, and inquiring parties who are within the jurisdiction of our Department prior to the end of official working hours.</p>
            <hr>
            <br>
            
            <h1>SERVICES</h1>
            <h3>WASTE MANAGEMENT OPERATIONS</h3><br>
            <li>Barangay Dedicated Waste Collection</li>
            <p>The Department of Sanitation and Cleanup Works of Quezon City (DSQC) through the Waste Management Operations Division provides regular waste collection service to all Quezon City Barangays and Households following a separate schedule for biodegradables and non-biodegradable as part of segregation-at-source policy.</p>
            <li>Bulky Waste Collection</li>
            <p>The Department of Sanitation and Cleanup Works of Quezon City through the Waste Management Operation Division provides service for bulky wastes deemed too large for regular waste collection, such as but not limited to, tree trunks, discarded furniture, and large appliances.</p>
            <li>Main Road Collection</li>
            <p>The Department of Sanitation and Cleanup Works of Quezon City through the Waste Management Operation Division provides waste collection service along major thoroughfares and other areas as identified by the City.</p>
            <li>Identified Markets, Schools, and Other Institutions Waste Collection</li>
            <p>The Department of Sanitation and Cleanup Works of Quezon City through the Solid Waste Management Division provides stationery collections for specific institutions within the City.</p>
            <li>Disaster-Relief and Cleanup Support</li>
            <p>The Department of Sanitation and Cleanup Works of Quezon City (DSQC) through the Waste Management Operations Division provides the deployment of support vehicles for waste collection or transportation in response to any crisis or requirement of the city government and other requesting organizations/agencies. The service provides the collection and disposal of disaster-relief operations such as but not limited to, debris from fire incidents, emergency/crisis-response, demolition/clearing activities, and typhoons, and bulky waste as may be determined by DSQC;</p>
            <li>Permits and Compliance</li>
            <p>The Task Force on Solid Waste Management (TFSWM) provides the deployment of support vehicles for waste collection or transportation in response to any crisis or requirement of the City Government and other requesting organizations/agencies. The service provides the collection and disposal of disaster-relief operations such as debris from fire incidents, emergency/crisis-response, demolition/clearing activities and typhoons, and bulky waste.</p>
            <li>Processing and Issuance of Environmental Clearance</li>
            <p>Environmental Clearance is issued by the Quezon City Government thru the Task Force on Solid Waste Management (TFSWM) to establishments that are compliant with the QC Environment Code and other National Government sanitation and environmental standards. An Environmental Clearance is valid 1 year from the date of its issuance and must be renewed annually.</p>
            <li>Payment of Environmental Violation Receipt (EVR) and Ordinance Violation Receipt (OVR)</li>
            <p>EVR and OVR that were issued by the Task Force on Solid Waste Management (TFSWM) and any other authorized personnel must be settled by the violator and pay the corresponding penalties based on City Ordinance SP 2350 S-2014</p>
            <li>Request for Data, Speaker, Training, or Seminar</li>
            <p>The Task Force on Solid Waste Management (TFSWM) is available to provide data or lectures on City Ordinance SP 2350 S-2014, waste management operations, and other relevant public services and projects.</p>
            <li>Environmental and Sanitation Compliance Assistance</li>
            <p>Providing assistance in resolving concerns on violations of environmental and sanitation standards through the conduct of ocular inspection/investigation.</p>
            <hr>
            <br>
           <h1>GUIDES</h1> <br>
                <div class="collapsible-box1" onclick="toggleBox1()">
                    <div class="box-title"> <strong>How To Secure Environment Clearance (EC) </strong></div>
                         <div class="box-content1">
                    <h5>Requirements:</h5>
                    <li>Unified Business Permit Application Form </li>
                    <li>Barangay Clearance </li> 

                    <h5>Supporting Documents</h5>
                    <li>Environemental Compliance Permit (ECC)</li>
                    <li>Certification of Non-Coverage (CNC)</li>
                    <li>Permit to Operate Emission Source Installation (PO-ESI)</li>
                    <li>LLDA Clearance</li>
                    <li>Discharge Permit </li>
                    <li>Other Local Permits</li>
                    <h5>Steps:</h5>
                    <li>Access the online application for new business through the QCG Business-OneStop-Service (BOSS)
                         website/account https://qceservices.quezoncity.gov.ph.</li>
                    <li>Email a scanned copy of all the documentary requirements for Environmental Clearance (EC) to TFSolidWaste@quezoncity.gov.ph with the subject
                         “ENVIRONMENTAL CLEARANCE APPLICATION”.</li>
                    <li>Wait for the results of the evaluation of the application via email.</li>
                    <li>Settle payment at any branch of Landbank of the Philippines (LBP) or through online banking. Email a scanned copy of the Official Receipt
                         to TFSolidWaste@quezoncity.gov.ph for payment verification. </li>
                    <li>A hard copy of the EC will be delivered to the preferred address.</li>
                    <li>The establishment shall be subject to onsite inspection for further validation.</li>
                    
                    </div>
                </div>
                <br>

                <div class="collapsible-box2" onclick="toggleBox2()">
                    <div class="box-title"> <strong>How To Settle Environmental Violation Receipt (EVR)</strong></div>
                         <div class="box-content3">
                    <h5></h5>
                    <li></li>
                    </div>
                </div>
                <br>


                <div class="collapsible-box3" onclick="toggleBox3()">
                    <div class="box-title"> <strong>How To Request For Cleanup Operations (Riverways Cleaning Operations Group Or Special Cleaning Operations Group)</strong></div>
                        <div class="box-content">
                    <h5></h5>
                    <p></p>
                        </div>
                    </div>
                <br>

                <div class="collapsible-box4" onclick="toggleBox4()">
                    <div class="box-title"> <strong>How To Request For Bulky Waste Collection</strong></div>
                         <div class="box-content4">
                    <h5></h5>
                    <p></p>
                    </div>
                </div>
                <br>

                <div class="collapsible-box5" onclick="toggleBox5()">
                    <div class="box-title"> <strong>Waste Collection Schedule</strong></div>
                         <div class="box-content5">
                    <h5></h5>
                    <p></p>
                    </div>
                </div>

            <blockquote>
            "We are more than just a solid waste management organization; we are a dedicated team bound by a common purpose – to preserve, clean, and enhance the environment of our community. We are committed to managing waste responsibly, ensuring a cleaner and healthier future for all our residents."
            </blockquote>
        </article>
    </div>


         <script>
        // JavaScript function to toggle the box
        function toggleBox1() {
            var box = document.querySelector('.collapsible-box1');
            var boxContent = document.querySelector('.collapsible-box1 .box-content1');

            // Toggle the height and content visibility
            if (box.style.height === '40px' || box.style.height === '') {
                box.style.height = 'auto';
                boxContent.style.display = 'block';
            } else {
                box.style.height = '40px';
                boxContent.style.display = 'none';
            }
        }

        function toggleBox2() {
            var box = document.querySelector('.collapsible-box2');
            var boxContent = document.querySelector('.collapsible-box2 .box-content2');

            // Toggle the height and content visibility
            if (box.style.height === '40px' || box.style.height === '') {
                box.style.height = 'auto';
                boxContent.style.display = 'block';
            } else {
                box.style.height = '40px';
                boxContent.style.display = 'none';
            }
        }

        function toggleBox3() {
            var box = document.querySelector('.collapsible-box3');
            var boxContent = document.querySelector('.collapsible-box3 .box-content3');

            // Toggle the height and content visibility
            if (box.style.height === '40px' || box.style.height === '') {
                box.style.height = 'auto';
                boxContent.style.display = 'block';
            } else {
                box.style.height = '40px';
                boxContent.style.display = 'none';
            }
        }

        function toggleBox4() {
            var box = document.querySelector('.collapsible-box4');
            var boxContent = document.querySelector('.collapsible-box4 .box-content4');

            // Toggle the height and content visibility
            if (box.style.height === '40px' || box.style.height === '') {
                box.style.height = 'auto';
                boxContent.style.display = 'block';
            } else {
                box.style.height = '40px';
                boxContent.style.display = 'none';
            }
        }

        function toggleBox5() {
            var box = document.querySelector('.collapsible-box5');
            var boxContent = document.querySelector('.collapsible-box5 .box-content5');

            // Toggle the height and content visibility
            if (box.style.height === '40px' || box.style.height === '') {
                box.style.height = 'auto';
                boxContent.style.display = 'block';
            } else {
                box.style.height = '40px';
                boxContent.style.display = 'none';
            }
        }
    </script>

   
</body>

</html>
