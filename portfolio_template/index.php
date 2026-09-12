<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!--
        PHP TASK FOR STUDENTS:
        1. Create PHP variables for name, role, bio, email and phone.
        2. Use echo to display the variables in the HTML below.
        3. Create a PHP array for skills and use foreach to display them.
        4. Create an array of projects and use foreach to generate project cards.
        5. Use PHP date() to display the current year in the footer.
    -->

    <nav>
        <div class="container nav-content">
            <div class="logo">
                <!-- PHP: Display the person's name here using echo -->
                Your Name
            </div>

            <div class="nav-links">
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container hero-content">

            <div>
                <p class="small-title">HELLO, I'M</p>

                <!-- PHP: Display name using echo -->
                <h1>Your Name</h1>

                <!-- PHP: Display role using echo -->
                <h2>Your Role</h2>

                <!-- PHP: Display bio using echo -->
                <p class="hero-text">
                    Write a short introduction about yourself here.
                </p>

                <a href="#contact" class="button">Contact Me</a>
            </div>

            <div class="profile-image">
                <img src="images/profile.jpg" alt="Profile Photo">
            </div>

        </div>
    </section>

    <section id="about">
        <div class="container">
            <p class="section-label">ABOUT ME</p>
            <h2 class="section-title">A little about me</h2>

            <!-- PHP: Display the bio variable using echo -->
            <p class="about-text">
                Your introduction goes here.
            </p>
        </div>
    </section>

    <section id="skills">
        <div class="container">
            <p class="section-label">MY SKILLS</p>
            <h2 class="section-title">Technologies I work with</h2>

            <div class="skills">

                <!--
                    PHP TASK:
                    Create a skills array and use foreach to generate
                    each skill inside a div with class="skill".

                    Example HTML output:
                    <div class="skill">HTML</div>
                -->

                <div class="skill">HTML</div>
                <div class="skill">CSS</div>
                <div class="skill">PHP</div>

            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <p class="section-label">MY WORK</p>
            <h2 class="section-title">Recent Projects</h2>

            <div class="projects">

                <!--
                    PHP TASK:
                    Create an array of projects.

                    Each project should contain:
                    - title
                    - description
                    - technology

                    Use foreach to generate the project cards.

                    Example:
                    <?php foreach ($projects as $project) { ?>
                        ... HTML ...
                    <?php } ?>
                -->

                <div class="project-card">
                    <p class="project-number">PROJECT</p>
                    <h3>Project Title</h3>
                    <p>Project description goes here.</p>
                    <span>HTML, CSS, PHP</span>
                </div>

                <div class="project-card">
                    <p class="project-number">PROJECT</p>
                    <h3>Project Title</h3>
                    <p>Project description goes here.</p>
                    <span>PHP, MySQL</span>
                </div>

            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container contact">
            <p class="section-label">GET IN TOUCH</p>
            <h2 class="section-title">Let's work together.</h2>

            <p>Have a project or idea? Feel free to contact me.</p>

            <div class="contact-info">

                <!-- PHP: Display email using echo -->
                <a href="mailto:your@email.com">your@email.com</a>

                <!-- PHP: Display phone using echo -->
                <a href="tel:+919876543210">+91 98765 43210</a>

            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <!-- PHP: Use date("Y") to display the current year -->
            <p>© 2026 Your Name. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
