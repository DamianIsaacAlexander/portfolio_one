<!DOCTYPE html>
<html lang="en">
<head>
    <title>Resume - Damian Isaac</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        <?php include 'style.css'; ?>
        <?php include (dirname(__FILE__).'/styles/about.css')?>    
    </style>
    <script src="https://kit.fontawesome.com/7d91046a00.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,400;0,700;1,400&family=Merriweather:ital@0;1&display=swap" rel="stylesheet">
    <script src="index.js" defer></script>
</head>
<body> 
    <main class="container-page">
        <?php include (dirname(__FILE__).'/components/navigation.php')?>    
        <div id="container-about">
            <div class="about-top-group">
                <h2 class="about-header"><span class="entity">&#60</span>Hello!<span class="entity">/&#62</span></h2>
                <h3 class="about-header palette-blue">I'm Damian</h3>
                    
            </div>
            <div class="about-middle-group">
                <img class="img-profile" src="https://damianalexanderisaac.herokuapp.com/img/profile_picture.jpeg" alt="">
            </div>
            <div class="about-bottom-group">
                <p class="description-about">
                    I'm a full-stack web developer, currently pursuing a bachelor's in computer science.
                </p> 
                <div class="about-cta-group">
                    <a href="https://damianalexanderisaac.herokuapp.com/contact.php" class="about-cta">Contact</a>
                    <a href="https://damianalexanderisaac.herokuapp.com/resume.php" class="about-cta-reverse">Resume</a>
                </div>     
            </div>
        </div>
    </main>
    <?php include (dirname(__FILE__).'/components/footer.php')?>    
</body>