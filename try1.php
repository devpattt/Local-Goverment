<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Personal Portfolio #2 | AsmrProg</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&family=Ubuntu:wght@300;400;500;700&display=swap');

html{
    scroll-behavior: smooth;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Raleway', sans-serif;
}

body{
    font-size: 14px;
}

header{
    width: 100%;
    height: 100vh;
    background-color: #2b2f4b;
    color: #fff;
}

header #particles{
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

header .info-text{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 0.8rem;
    height: 100vh;
}

header .info-text h1{
    font-size: 5rem;
    font-weight: 500;
    font-family: 'Ubuntu';
}

header .info-text h3{
    font-size: 1.5rem;
}

header .info-text .scroll{
    position: absolute;
    bottom: 20%;
    left: 50%;
    color: #fff;
    transform: translate(0, -50%);
    transition: all 0.5s;
}

header .info-text .scroll:hover{
    opacity: 0.7;
}

header .info-text .scroll::before{
    position: absolute;
    top: -16px;
    left: -16px;
    z-index: -1;
    content: '';
    width: 44px;
    height: 44px;
    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.1);
    border-radius: 100%;
    animation: pulse 3s infinite;
}

@keyframes pulse {
    0%, 100%{
        opacity: 0;
    }
    15%, 45%{
        opacity: 1;
    }
    60%{
        box-shadow: 0 0 0 30px rgba(255, 255, 255, 0.1);
        opacity: 0;
    }
}

#about, #features{
    background-color: #2b2f4b;
    padding: 40px;
}

#about .header, #features .header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
}

#about .header h1, #features .header h1{
    text-align: center;
    color: #fff;
    text-transform: uppercase;
}

#about .header a, #features .header a{
    text-decoration: none;
    font-size: 1.3em;
    color: #fff;
    border: 1px solid transparent;
    padding: 10px 50px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
    border-radius: 6px;
    transition: all 0.3s ease;
}

#about .header a:hover, #features .header a:hover{
    border-color: #fff;
    box-shadow: none;
}

#about .card, #features .card{
    padding: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
    border-radius: 20px;
    display: flex;
    gap: 30px;
    border: 1px solid transparent;
    transition: all 0.3s ease;
}

#about .card:hover, #features .card:hover{
    border-color: #fff;
    box-shadow: none;
}

#about .card img{
    max-width: 200px;
    max-height: 200px;
}

#about .card .info{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
}

#about .card .info h1, #features .card .info h1{
    margin-bottom: 20px;
    color: #fff;
    font-size: 1.7rem;
    font-weight: bold;
    font-family: 'Ubuntu';
}

#about .card .info p, #features .card .info p{
    color: #ccc;
    font-size: 1.1rem;
    line-height: 1.8rem;
}

#features .feature-cards{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 2rem;
}

#features .feature-cards .card{
    display: flex;
    flex-direction: column;
    align-items: center;
    flex: 1;
    min-width: 350px;
}

#features .feature-cards .card .info i{
    color: #fff;
    font-size: 8rem;
    width: 100%;
    text-align: center;
    margin-bottom: 1.4rem;
}

#features .feature-cards .card .info h1{
    text-align: center;
}

#features .feature-cards .card .info p{
    font-size: 1.1rem;
}

.scroll-top{
    display: none;
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #2b2f4b;
    color: #fff;
    border: 1px solid transparent;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
    padding: 16px 18px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 20px;
    transition: all 0.3s ease;
}

.scroll-top:hover{
    border-color: #fff;
    box-shadow: none;
}

@media screen and (max-width: 720px) {
    header .info-text h1{
        font-size: 4rem;
    }

    header .info-text h3{
        font-size: 1.1rem;
    }

    #about .card{
        flex-direction: column;
        align-items: center;
    }

    #about .card img{
        max-width: 150px;
        max-height: 150px;
    }

}

    </style>
</head>

<body>

    <header>
        <div id="particles"></div>
        <div class="info-text">
            <h1>AsmrProg</h1>
            <h3>Web Coding Youtube Channel With Big Community</h3>
            <a href="#about" class="scroll"><i class='bx bxs-down-arrow'></i></a>
        </div>
    </header>

    <section id="about">
        <div class="header">
            <h1>About Me</h1>
            <a href="#">Hire Me</a>
        </div>

        <div class="card">
            <img src="assets/logo.png">
            <div class="info">
                <h1>It's AsmrProg</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam voluptates error in dolorum dolor
                    rerum
                    reiciendis consequuntur tenetur maxime.
                </p>

            </div>
        </div>
    </section>

    <section id="features">
        <div class="header">
            <h1>Features</h1>
            <a href="#">See More</a>
        </div>
        <div class="feature-cards">
            <div class="card">
                <div class="info">
                    <i class='bx bxs-devices'></i>
                    <h1>Responsive Design</h1>
                    <p>
                        Explore a diverse collection of my creative endeavors, including web design, javascript and mini
                        projects.
                        Each project showcases my creativity, attention to detail, and passion for delivering visually
                        stunning and
                        engaging experiences.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="info">
                    <i class='bx bx-code-alt'></i>

                    <h1>Creative Projects</h1>
                    <p>
                        Behind the scenes, I pride myself on writing clean, efficient, and maintainable code. Learn more
                        about my
                        coding standards and practices that contribute to the functionality and performance of the
                        projects I
                        undertake.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="info">
                    <i class='bx bxs-component'></i>
                    <h1>Code Quality</h1>
                    <p>
                        Behind the scenes, I pride myself on writing clean, efficient, and maintainable code. Learn more
                        about my
                        coding standards and practices that contribute to the functionality and performance of the
                        projects I
                        undertake.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <button class="scroll-top" onclick="scrollToTop()">
        <i class='bx bxs-up-arrow'></i>
    </button>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script>
        particlesJS("particles", {
    particles: {
        number: {
            value: 100,
            density: {
                enable: true,
                value_area: 800
            }
        },
        color: {
            value: "#ffffff"
        },
        shape: {
            type: "circle",
            stroke: {
                width: 0,
                color: "#000000"
            }
        },
        opacity: {
            value: 0.8,
            random: true,
            animation: {
                enable: true,
                speed: 1,
                opacity_min: 0,
                sync: false
            }
        },
        size: {
            value: 3,
            random: true
        },
        line_linked: {
            enable: true,
            distance: 150,
            color: "#ffffff",
            opacity: 0.4,
            width: 1
        },
        move: {
            enable: true,
            speed: 2,
            direction: "none",
            random: true,
            straight: false,
            out_mode: "out",
            bounce: false,
        }
    },
    interactivity: {
        detectsOn: "canvas",
        events: {
            onHover: {
                enable: true,
                mode: "push"
            },
            onClick: {
                enable: true,
                mode: "push"
            },
            resize: true
        },
        modes: {
            repulse: {
                distance: 100,
                duration: 0.4
            },
            push: {
                particles_nb: 4
            }
        }
    },
    retina_detect: true
});

function scrollToTop() {
    window.scrollTo({
        top: 0,
    });
}

window.addEventListener('scroll', function () {
    var scrollTopButton = document.querySelector('.scroll-top');
    if (this.window.pageYOffset > 200) {
        scrollTopButton.style.display = 'block';
    } else {
        scrollTopButton.style.display = 'none';
    }
});

    </script>
</body>

</html>
