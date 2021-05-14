<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Resume - Damian Isaac</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        <?php include "style.css" ?>
        <?php include "resume.css" ?>
    </style>    
    <script src="https://kit.fontawesome.com/7d91046a00.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,400;0,700;1,400&family=Merriweather:ital@0;1&display=swap" rel="stylesheet">
    <script src="index.js" defer></script>
</head>
<body>
    <?php include 'header.php';?>     
        <main class="container-page">
            <div id="container-resume">
                <div class="resume-header-container">
                    <div class="resume-header-group-top">
                        <h2 class="resume-header-name">Damian Isaac Alexander</h2>
                        <div class="resume-external-link-group">
                            <a class="resume-header-external-link" href="https://github.com/DamianIsaacAlexander" target="_blank"><i class="fab fa-github-square"></i></a>
                            <a class="resume-header-external-link" href="https://www.linkedin.com/in/damian-isaac-2b5b91196" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a class="resume-header-external-link" href="mailto:damianalexanderisaac@gmail.com" target="_blank"><i class="fa fa-envelope-square"></i></a>
                        </div>
                    </div>
                    <div class="resume-header-group-middle">
                        <ul class="resume-header-list">
                                <li class="resume-header-list-item"><a class="resume-section-link" href="#previous-employment">Career</a></li>
                                <li class="resume-header-list-item"><a class="resume-section-link" href="#skills">Skills</a></li>
                                <li class="resume-header-list-item"><a class="resume-section-link" href="#education">Education</a></li>
                        </ul>
                        <div class="horizontal-line"></div>
                    </div>
                    <div class="resume-header-group-bottom">
                        <img class="resume-header-profile-img" src="http://localhost/Portfolio/img/profile_picture.jpeg" alt="profile img">
                    </div>
                </div>
                <div class="resume-body-container">
                    <?php include 'previousEmployment.php';?>
                    <?php include 'skills.php';?>
                    <?php include 'education.php';?>
                </div>
            </div>
        </main>
    <?php include 'footer.php';?>
</body>