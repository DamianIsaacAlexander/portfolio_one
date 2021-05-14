<!DOCTYPE html>
<html lang="en">
<head>
<title>Resume - Damian Isaac</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        <?php include 'style.css'; ?>
        <?php include 'contact.css'; ?>
    </style>
    <script src="https://kit.fontawesome.com/7d91046a00.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,400;0,700;1,400&family=Merriweather:ital@0;1&display=swap" rel="stylesheet">
    <script src="index.js" defer></script>
</head>
<body>
    <?php include 'header.php';?>     
        <main class="container-page">
            <div id="container-contact">
                <h2 class="contact-header">Contact</h2>
                <div class="horizontal-line"></div>
                <form class="contact-form" action="mailto:damianalexanderisaac@gmail.com" method="post">
                    <label for="fname">Name</label>
                    <input type="text" id="fname" name="fullname" placeholder="Your name.." autofocus>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your email..">

                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" placeholder="Your phone..">

                    <label for="subject">Message</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </main>
    <?php include 'footer.php';?>
</body>