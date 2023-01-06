<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dynamic Website</title>
    <link rel="stylesheet" href="css/style.css"/>
    
</head>
<body>
    <header class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo1.png"/>
            </a>
            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="Registration.html">Registration</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="features.html">Features</a></li>

            </ul>
        </nav>
        <div class="main-heading">
            <h1>DIEMS-Digital Class Educational Marketplace</h1>
            <p>Digital Class is a one-stop destination for online courses and educational business, this is India’s first Educational Marketplace For Course sellers, Students, Coaching institutes, Schools, colleges, universities, YouTubers, Tutors, and Live classes Searching and Reaching at one destination.</p>
            <a class="main-btn" href="#">Contact</a>
        </div>
    </header>
    <section class="features">
        <div class="feature-container">
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon1.png"/>
                </div>
                <div class="f-text">
                    <h4>Web Development</h4>
                    <p>Digital Class Educational Marketplace</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon2.png"/>
                </div>
                <div class="f-text">
                    <h4>Software Development</h4>
                    <p>Digital Class Educational Marketplace</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon3.png"/>
                </div>
                <div class="f-text">
                    <h4>App Development</h4>
                    <p>Digital Class Educational Marketplace</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="about-img">
            <img src="images/about.png">
        </div>
        <div class="about-text">
            <h2>Start Tracking Your Statistics</h2>
            <p>Here anyone can Teach & Sell their Recorded Courses and Students can buy all types of courses by comparing tutor profiles, fees, discounts, and other features using the advanced filter option.</p>
            <button class="main-btn">Read More</button>
        </div>
    </section>
    <footer class="contact">
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <p>Digital Class Educational Marketplace.</p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Your Full Name"/>
            <input type="email" name="email" placeholder="Your E-Mail"/>
            <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </footer>
</body>
</html>