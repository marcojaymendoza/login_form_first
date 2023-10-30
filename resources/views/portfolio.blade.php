<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://kit.fontawesome.com/fa6236b6f1.js" crossorigin="anonymous"></script>
    <title>My Personal Portfolio</title>
</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="css/Images/MJlogo.png" alt="" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#project">Project</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i class="fa-solid fa-xmark" onclick="closemenu()"></i>
                </ul>
                <i class="fa-solid fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <p>IT Professional</p>
                <h1>Hi, Im <span>Marco Jay,</span> <br>From Philippines</br></h1>
            </div>
        </div>
    </div>
    <!----------------ABOUT ME----------------->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="css/Images/pic5.jpg" alt="">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me!</h1>
                    <p>Hello my name is marco jay mendoza, a 29 years old, and currently living in City of Davao, Philippines.
                        I am the oldest of the family. I have a Bachelor Degree of Information Technology.
                        I use to make this kind of web portfolio for my personal
                        purposes. I have a fashion in this industry as a DEVELOPER/PROGRAMMER.
                       <br>
                       What's more unique on me is i can handle my self in a difficult situation,
                       I easily handle Stress and Pressure,

                        I am a Experienced information technology professional in search of a position that
                        allows me to apply my management and technical skills to achieve corporate
                        goals, develop improved processes for managing IT requests and accomplish
                        projects in a more efficient way.
                    </p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('experience')">Experience</p>
                        <p class="tab-links" onclick="opentab('education')">Educations</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>Front-end Developer</span><br>Designing Front Websites</li>
                            <br>
                            <li><span>Software Developer</span><br>Software System Development</li>
                            <br>
                            <li><span>IT Technical Support</span><br>Cabling/Networking/Installations</li>
                            <br>
                            <li><span>Graphics Desinger</span><br>Photo Manipulations</li>
                            <br>
                            <li><span>Video Editor</span><br>Motion Graphics/Video Editing</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="experience">
                        <ul>
                            <li><span>2023 - 6 months </span><br>Human Resource Information Specialist/IT Support</li>
                            <br>
                            <li><span>2021 - 2023</span><br>On-call Computer Technician/ IT Tech Support</li>
                            <br>
                            <li><span>2019 - 2021</span><br>IT Staff/Admin Officer</li>
                            <br>
                            <li><span>2017</span><br>Registrar/Encoder</li>
                            <br>
                            <li><span>2017</span><br>Graphics Artist</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>2011 - 2016</span><br>Bachelor of Science in Information Technology.</li>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!---------Services---------->
<div id="services">
    <div class="container">
        <h1 class="sub-title">My Services</h1>
        <div class="services-list">
          <div>
            <i class="fa-solid fa-laptop-code"></i>
            <h2>Front-End Web Design</h2>
            <p>Design and Build the interface navigation and aesthetic of websites for business and client.</p>
            <a href="#">Learn more</a>
            </div>
         <div>
                <i class="fa-solid fa-database"></i>
                <h2>Database management</h2>
                <p>Developing and Maintaining an organization System that store and organize data for companies or business.</p>
                <a href="#">Learn more</a>
             </div>
         <div>
            <i class="fa-solid fa-gears"></i>
            <h2>IT Support Specialist</h2>
            <p>Networking, Cabling, Software Installations, Troubleshoots, Computer Technician and other related to Computer Technical Issues.</p>
            <a href="#">Learn more</a>
         </div>
         <div>
            <i class="fa-solid fa-wand-magic-sparkles"></i>
            <h2>Graphics Design</h2>
            <p>Design and Manipulate graphics using Adobe Photoshop, Adobe Illustrator, Corel Draw and other Graphical Softwares.</p>
            <a href="#">Learn more</a>
         </div>
         <div>
            <i class="fa-solid fa-film"></i>
            <h2>Video Editing</h2>
            <p>Edit Vlogs, Content and other video using Adobe After Effects, Capcut and Other Video Editing Softwares.</p>
            <a href="#">Learn more</a>
         </div>
        </div>
    </div>
</div>

<!------Profile------->
<div id="project">
    <div class="container">
        <h1 class="sub-title">My Projects</h1>
        <div class="work-list">
            <div class="work">
                <img src="css/work/5.jpg" alt="">
                <div class="layer">
                    <h3>Project Title Here!</h3>
                    <p>Project Description here!</p>
                    <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="css/work/6.jpg" alt="">
                <div class="layer">
                    <h3>Project Title Here!</h3>
                    <p>Project Description here!</p>
                    <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="css/work/7.jpg" alt="">
                <div class="layer">
                    <h3>Project Title Here!</h3>
                    <p>Project Description here!</p>
                    <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
        <a href="#" class="btn">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            See More</a>
    </div>
</div>
<!------Profile------->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me!</h1>
                <p><i class="fa-solid fa-envelope"></i>marcojaymendoza12@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i>+63 967 391 1009</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/marcjaymenz/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://instagram.com/iammarcojaymendoza?igshid=MzMyNGUyNmU2YQ=="><i class="fa-brands fa-instagram"></i></i></a>
                    <a href="https://www.linkedin.com/in/marco-jay-mendoza-2964aa289/"><i class="fa-brands fa-linkedin"></i></i></a>
                </div>
                <a href="css/marco.pdf" download class="btn btn2">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Download Resume</a>
            </div>
            <div class="contact-right">
                <form name="submit-to-google-sheet">
                    <input type="text" name="Name" placeholder="Name" required>
                    <input type="email" name="Email" placeholder="Email" required>
                    <textarea name="Message" rows="6" placeholder="Message"></textarea>
                    <button type="submit" class="btn btn3">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Submit<i class="fa-regular fa-paper-plane fa-beat-fade"></i></button>
                </form>
                <span id="msg"></span>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p> Copyright © Marco Jay Mendoza 2023 <i class="fa-solid fa-person-hiking"></i> for successful Fullstack Developer</p>
    </div>
</div>
    <!---------
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me!</h1>
                <p><i class="fa-solid fa-envelope"></i>marcojaymendoza12@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i>+63 967 391 1009</p>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></i></a>
                </div>
                <a href="css/marco.pdf" download class="btn btn2">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Download Resume</a>
            </div>
            <div class="contact-right">
                <form>
                    <input type="text" name="Name" placeholder="Name" required>
                    <input type="email" name="Email" placeholder="Email" required>
                    <textarea name="Message" rows="6" placeholder="Message"></textarea>
                    <button type="submit" class="btn btn3">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p> Copyright © Marco Jay Mendoza 2023 <i class="fa-solid fa-person-hiking"></i> for successful Fullstack Developer</p>
    </div>
</div>
-->
<script src="/css/javascripts/main.js"></script>
<script src="/css/javascripts/message.js"></script>
</body>
</html>
