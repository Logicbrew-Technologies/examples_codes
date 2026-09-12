<?php

$name = "Arjun Kumar";
$role = "Full Stack Developer";
$bio = "I am a passionate developer who enjoys building simple, useful and modern web applications.";

$email = "arjun@example.com";
$phone = "+91 98765 43210";

$skills = [
    "HTML",
    "CSS",
    "PHP",
    "MySQL",
    "JavaScript"
];

$projects = [
    [
        "title" => "Student Management System",
        "description" => "A simple web application to manage student records.",
        "technology" => "PHP, MySQL"
    ],
    [
        "title" => "Online Book Store",
        "description" => "A basic online bookstore with product listings and database integration.",
        "technology" => "PHP, MySQL, HTML, CSS"
    ],
    [
        "title" => "Event Registration",
        "description" => "A registration system for collecting and managing event participants.",
        "technology" => "PHP, MySQL"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> - Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav>
        <div class="container nav-content">
            <div class="logo">
                <?php echo $name; ?>
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

                <h1><?php echo $name; ?></h1>

                <h2><?php echo $role; ?></h2>

                <p class="hero-text">
                    <?php echo $bio; ?>
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

            <p class="about-text">
                <?php echo $bio; ?>
            </p>
        </div>
    </section>

    <section id="skills">
        <div class="container">
            <p class="section-label">MY SKILLS</p>
            <h2 class="section-title">Technologies I work with</h2>

            <div class="skills">
                <?php foreach ($skills as $skill) { ?>
                    <div class="skill">
                        <?php echo $skill; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <p class="section-label">MY WORK</p>
            <h2 class="section-title">Recent Projects</h2>

            <div class="projects">

                <?php foreach ($projects as $project) { ?>

                    <div class="project-card">

                        <p class="project-number">PROJECT</p>

                        <h3>
                            <?php echo $project["title"]; ?>
                        </h3>

                        <p>
                            <?php echo $project["description"]; ?>
                        </p>

                        <span>
                            <?php echo $project["technology"]; ?>
                        </span>

                    </div>

                <?php } ?>

            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container contact">

            <p class="section-label">GET IN TOUCH</p>

            <h2 class="section-title">Let's work together.</h2>

            <p>
                Have a project or idea? Feel free to contact me.
            </p>

            <div class="contact-info">

                <a href="mailto:<?php echo $email; ?>">
                    <?php echo $email; ?>
                </a>

                <a href="tel:<?php echo $phone; ?>">
                    <?php echo $phone; ?>
                </a>

            </div>

        </div>
    </section>

    <footer>
        <div class="container">

            <p>
                © <?php echo date("Y"); ?>
                <?php echo $name; ?>.
                All rights reserved.
            </p>

        </div>
    </footer>

</body>
</html>
