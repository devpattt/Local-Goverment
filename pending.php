<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMS</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');

body{
    background-color: #000;
    color: #fff;
    font-family: 'Roboto', sans-serif;
    overflow-x: hidden;
}

#container{
    transition: 1s all ease-in-out;
}

#container.menuopen{
    filter: blur(8px);
    transform: scale(1.2);
}

section{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    position: relative;
    background-size: cover;
    padding: 50px;
}

section::after{
    position: absolute;
    background-color: #000;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    opacity: 0.5;
}

section h1{
    font-size: 120px;
    z-index: 2;
}

section p {
    margin-top: 10px; /* Adjust this margin as needed */
}


header{
    z-index: 9999;
    position: relative;
}

header #logo{
    position: fixed;
    top: 30px;
    left: 0;
    right: 0;
    width: 70px;
    height: auto;
    margin: 0 auto;
    opacity: 1;
    transition: all 0.3s cubic-bezier(0.215, 0.61, 0.355, 1) 0.6s;
}

header nav{
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    left: 0;
    right: 0;
    width: 420px;
    z-index: 100;
    top: 130px;
    margin: 0 auto;
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    transition: 1s all cubic-bezier(0.080, 0.9, 0.18, 1) 0.2s;
}

header nav a{
    color: #fff;
    text-decoration: none;
    font-weight: 700;
    padding: 10px 16px;
    font-size: 18px;
    letter-spacing: 1.8px;
    transition: 0.3s all cubic-bezier(0.080, 0.9, 0.18, 1) 0.6s, 0.3s color ease;
}

header nav a:hover{
    color: #000;
}

header nav button{
    background: rgba(255, 255, 255, 0.1);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    width: 60px;
    height: 60px;
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    position: absolute;
    z-index: 100;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    margin: auto;
    border-radius: 100%;
    cursor: pointer;
    transform: scale(0);
    transition: 0.3s all cubic-bezier(0.080, 0.9, 0.18, 1) 0.2s;
}

header nav button span{
    width: 50%;
    background-color: #fff;
    height: 3px;
    display: block;
    margin: 4px auto;
    transform: scale(0);
    transition: 0.6s transform cubic-bezier(0.080, 0.9, 0.18, 1) 0s, 0.3s margin ease-in 0s;
}

header nav button:hover span{
    margin: 9px auto;
}

header.sticky #logo{
    opacity: 0;
}

header.sticky nav{
    top: 20px;
    padding: 0;
    width: 80px;
    height: 80px;
}

header.sticky nav button{
    transform: scale(1);
    transition-delay: 0.3s;
}

header.sticky nav button span{
    transform: scaleX(1);
    transition: 0.6s transform cubic-bezier(0.080, 0.9, 0.18, 1) 0.8s, 0.3s margin ease-in 0s;
}

header.sticky nav a{
    opacity: 0;
    transform: scale(0.3);
    transition-delay: 0.1s;
}

@media screen and (max-width: 520px) {
    
    header nav{
        height: 60px;
        width: 390px;
    }

    header nav button{
        width: 50px;
        height: 50px;
    }

    header nav a{
        font-size: 16px;
    }

    section h1{
        font-size: 80px;
    }

    header.sticky nav{
        width: 70px;
        height: 70px;
    }

}
    </style>
</head>

<body>

    <header>
        <img src="img/Quezon_City.svg.png" id="logo">
        <nav>
            <a href="#main">Contact</a>
            <a href="#profile">Services</a>
            <a href="#social">Contact</a>
            <a href="#about">About</a>
            <button id="menu">
                <span></span>
                <span></span>
            </button>
        </nav>
    </header>
    <div id="container">
        <section id="main" style="background-image: url(img/pexels-nikko-tan-133689.jpg);">
            <h1>Contact</h1>
            <p>Hello</p>
        </section>
        <section id="profile" style="background-image: url(img/pexels-alex-fu-2967770.jpg);">
            <h1>Services</h1>
        </section>
        <section id="social" style="background-image: url(images/3.jpg);">
            <h1>Contact</h1>
        </section>
        <section id="about" style="background-image: url(images/4.jpg);">
            <h1>About</h1>
        </section>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('header');
    const container = document.getElementById('container');
    const menuButton = document.getElementById('menu');
    const links = document.querySelectorAll('a[href^="#"]');

    // Function to handle the scroll
    function handleScroll() {
        container.classList.remove('menuopen');
        header.classList.toggle('sticky', window.scrollY >= 100);
    }

    // Function to handle menu button click
    function handleMenuButtonClick() {
        header.classList.remove('sticky');
        container.classList.toggle('menuopen');
    }

    // Function to handle anchor links click
    function handleLinkClick(event) {
        event.preventDefault();
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth'
            });
        }
    }

    // Function to close the menu when clicking outside and show the sticky menu
    function handleCloseOutside(event) {
        if (!menuButton.contains(event.target)) {
            // Check if the click was outside the menu button
            container.classList.remove('menuopen');
            header.classList.add('sticky');
        }
    }

    window.addEventListener('scroll', handleScroll);
    menuButton.addEventListener('click', handleMenuButtonClick);
    links.forEach(link => link.addEventListener('click', handleLinkClick));

    // Listen for clicks anywhere in document
    document.addEventListener('click', handleCloseOutside);
});
    </script>
</body>

</html>