
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" href="style.css">


</head>
<body>
    
    <nav class="navbar">
        <h1 class="logo">Angga AS</h1>
        <ul class="nav-links-container">
            <li class="nav-link"><a href="#home-section" class="links active">home</a></li>
            <li class="nav-link"><a href="#project-section" class="links">projects</a></li>
            <li class="nav-link"><a href="#about-section" class="links">about</a></li>
            <li class="nav-link"><a href="#contact-section" class="links">contact</a></li>
            <li class="nav-link" >
                <div class="dropdown">
                    <a href="#" class="links" class="dropbtn">Join Now</a>
                    <div class="dropdown-content">
                    <a href="login_form.php"> Login </a>
                    <a href="register_form.php"> Sign Up</a>
                    </div>
                    </div>
            </li>

                
           
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
       
    </nav>
    <header class="header" id="home-section">
        <div class="content">
            <h1 class="header-heading">Hey, I am <span class="brand-name">angga<span> adisambur S</span></span></h1>
            <a href="#" class="btn">Hire</a>
        </div>
    
        <div class="header-img-container">
            <div class="circle"></div>
            <img src="img/header-img.png" class="header-img" alt="">
        </div>

    </header>

    <section id="about-section">
        <h1 class="heading">about me</h1>
        <!-- about -->
        <div class="about-container">
            <div class="image-container">
                <div class="square"></div>
                <img src="img/about.png" class="about-img" alt="">
                <div class="social-links">
                    <a href="https://github.com/Squeeze101"><img src="img/github.png" class="social-img" alt=""></a>
                    <a href="https://www.instagram.com/anggaadisambur_/"><img src="img/insta.png" class="social-img" alt=""></a>
                    <a href="https://www.facebook.com/anggaas01"><img src="img/fb.png" class="social-img" alt=""></a>
                    <a href="https://twitter.com/anggaas18"><img src="img/twitter.png" class="social-img" alt=""></a>
                    
                </div>
            </div>
    
            <!-- info part -->
            <div class="info">
                <p>I am a semester student at the Yogyakarta University of Technology. I like to learn new things and am motivated by the latest technology and want to always try.

                    you can call me angga i like to drink coffee especially black coffee and i like to play games. </p>
                <a href="#" class="btn">Hire Me</a>
                <a href="#" class="btn">Download CV</a>
            </div>
        </div>
    </section>
    
<!-- skills part -->
<h2 class="sub-heading">skills</h2>

<div class="skills">
    <p class="skill-name">HTML</p>
    <p class="skill-name">CSS</p>
    <p class="skill-name">JavaScript</p>
    <p class="skill-name">Mysql</p>
    <p class="skill-name">PHP</p>
    <p class="skill-name">Networking</p>
    <p class="skill-name">Backhand Development</p>
    <p class="skill-name">More</p>
</div>

<!-- time line -->

<h2 class="sub-heading">education and experiences</h2>

<div class="timeline-container">
    <div class="card-container">
        <div class="card">
            <h1 class="card-title">2014 - 2017</h1>
            <p class="card-body">SMP Tuah Negri Pekanbaru</p>
        </div>
    </div>
    <div class="card-container">
        <div class="card">
            <h1 class="card-title">2017 - 2020</h1>
            <p class="card-body">Teknik Komputer dan Jaringan - SMK Muhammadiyah 2 Pekanbaru</p>
        </div>
    </div>
    <div class="card-container">
        <div class="card">
            <h1 class="card-title">2020 - now</h1>
            <p class="card-body">Sistem Informasi Sarjana - Universitas Teknologi Yogyakarta</p>
        </div>
    </div>
</div>

<section id="project-section">
    <h1 class="heading">Projects</h1>

    <div class="filter">
        <button class="btn filter-btn active">all</button>
        <button class="btn filter-btn">css</button>
        <button class="btn filter-btn">javascript</button>
        <button class="btn filter-btn">fullstack</button>
    </div>

    <!--  project cards -->

    <div class="project-container">
        <!-- <div class="project-card">
            <div class="project-wrapper">
                <div class="project-thumbnail">
                    <img src="img/close.png" class="close-btn" alt="">
                    <img src="img/project-1.png" class="project-img" alt="">
                    <span class="tags">#javascript, #css, #fullstack</span>
                </div>

                <div class="project-body">
                    <h1 class="project-name">project 1</h1>
                    <p class="project-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla eum et veniam eos ratione accusantium aut, accusamus deserunt quis dolores.</p>
                    <a href="#" class="btn">github</a>
                    <a href="#" class="btn">see live</a>
                </div>
            </div>
        </div> -->

        <script src="project.js"></script>
    </div>

    
</section>
<section id="contact-section">
    <h1 class="heading">contact</h1>
    <div class="form">
        <input type="text" placeholder="name">
        <input type="email" placeholder="email">
        <input type="text" placeholder="subject">
        <textarea placeholder="message"></textarea>
        <button class="contact-btn">contact</button>
    </div>
</section>
<footer>
    <p>Author: Angga AS</p>
    <p><a href="mailto:anggaas439@gmail.com">anggaas439@gmail.com</a></p>
  </footer>
</body>
<script src="app.js"></script>

</html>