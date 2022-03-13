<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <title>Ashen</title>
</head>

<body>
    <div class="scroll-up-btn"><i class="fas fa-angle-up"></i></div>
    <!-- navigation -->
    <nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="#">Ashen<span>Indula</span></a>
            </div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#projects" class="menu-btn">Projects</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>


    <!-- home -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, My Name is</div>
                <div class="text-2">Ashen Indula</div>
                <div class="text-3">and I'm a <span class="typing"></span></div>
                <a href="#">Hire me</a>
            </div>
        </div>
    </section>


    <!-- about -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <h3 class="title1">-Who am I ?-</h3>
            <div class="about-content">
                <div class="column left">
                    <img src="15.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Ashen Indula and I'm a <span class="typing-2"></span></div>
                    <p>I'm from Monaragala. I studied at Mo/ Dutugemunu M.M.V. After my school I followed a 3 months English course named Sun Ray. Then I joined Java Institute for Advanced Technology for my higher study. Now I am 2nd year student. So, I have a diploma in Software Engineering.</p>
                    <a href="#">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- projects -->
    <section class="projects" id="projects">
        <div class="max-width">
            <h2 class="title">Projects</h2>
            <h3 class="title1">-What I provide?-</h3>
            <div class="projects-content">
                <div class="card">
                    <div class="box">
                        <img class="im" src="Screenshot_1.jpg" alt="">
                        <i class="fas fa-eye"></i>
                        <div class="text">Vnaa</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img class="im" src="Screenshot_2.jpg" alt="">
                        <i class="fas fa-eye"></i>
                        <div class="text">Health First</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img class="im" src="Screenshot_3.jpg" alt="">
                        <i class="fas fa-eye"></i>
                        <div class="text">Blog</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img class="im" src="Screenshot_4.jpg" alt="">
                        <i class="fas fa-eye"></i>
                        <div class="text">Bootstrap</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- skills -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My Skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My Skills and Experiences</div>
                    <p>I am a Designer of Web Sites, Blog Sites and also Desktop Software Applications and also I'm Marketing Excecutive in Playiiit (pvt) LTD. I'm a student of Java Institute. After my 1st year I collected my Deploma in Software Engineering certificate...</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>80%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JS</span>
                            <span>30%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>80%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="column left">
                <div class="contact-content">
                    <div class="column left">
                        <h3 class="text2">Get in Touch</h3>
                        <p>If you want to Design a Web Site, Blog Site or Desktop Software Application, plz contact me via followings...</p>
                        <div class="icons">
                            <div class="row">
                                <i class="fas fa-user"></i>
                                <div class="info">
                                    <div class="head">Name</div>
                                    <div class="sub-title">Ashen Indula</div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="info">
                                    <div class="head">Address</div>
                                    <div class="sub-title">90, Raja Mawatha, Buttala</div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fas fa-phone"></i>
                                <div class="info">
                                    <div class="head">Phone</div>
                                    <div class="sub-title">070 32 13 678</div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fas fa-envelope"></i>
                                <div class="info">
                                    <div class="head">Email</div>
                                    <div class="sub-title">ashenindula@gmail.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column right">
                        <div class="text">Message me</div>
                        <form action="#">
                            <div class="field">
                                <div class="field name">
                                    <input type="text" placeholder="Name" required>
                                </div>
                                <div class="field email">
                                    <input type="email" placeholder="Email" required>

                                </div>
                                <div class="field">
                                    <input type="email" placeholder="Subject" required>
                                </div>
                                <div class="field textarea">
                                    <textarea cols="30" rows="10" placeholder="Describe Your Project..." required></textarea>
                                </div>
                                <div class="field">
                                    <div class="button">
                                        <button type="submit">Send message</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>


    <!-- footer -->
    <footer>
        <span>Created by <a href="#">AshenIndula</a> | <span class="far fa-copyright"> 2022 All rights reserved.</span></span>
    </footer>


    <script src="script.js"></script>
</body>

</html>