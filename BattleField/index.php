<h2>Sagar Chaudhary</h2>

<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$message = filter_input(INPUT_POST, 'message');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "battlefield";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Validate input (You can add more validation if needed)
if (empty($name) || empty($email) || empty($message)) {
    die("Please fill out all the fields.");
    }


 // Prepare and execute the SQL statement to insert data into the database
//  $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";


 if(mysqli_query($conn, $sql))
 {
     header("refresh: 0; url = index.html");
     echo"<script> alert('Thank you for contacting us! We will get back to you shortly.');</script>";
 } 
 else {
    echo "<script> alert('Failed to save the message. Please try again later.');</script>";
    header("refresh: 0; url = index.html");
 }


// Close the database connection
$conn->close();

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>IJAK-THE BATTLEFIELD!</title>
  <meta name="title" content="Unigine - Epic Games Made For True Gamers!">
  <meta name="description" content="This is an esports and gaming html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;500;600;700&family=Work+Sans:wght@600&display=swap"
    rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-banner-bg.png">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header active" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/ijaklogo_photoshoped.png" width="110" height="53" alt="ijaklogo">
      
      </a>
      

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>home</a>
          </li>

          <li class="navbar-item">
            <a href="#tournament" class="navbar-link" data-nav-link>tournament</a>
          </li>

          <li class="navbar-item">
            <a href="#news" class="navbar-link" data-nav-link>action</a>
          </li>

          <li class="navbar-item">
            <a href="#contact" class="navbar-link" data-nav-link>contact</a>
          </li>

        </ul>
      </nav>

      <a href="#home" class="btn" data-btn>Battle Field</a>

      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <div class="hero has-before" id="home">
        <div class="container">

          <P class="section-subtitle">Choose Your Battles</P>

          <h1 class="h1 title hero-title">The largest PaintBall  <br> Combat Gaming!</h1>

          <a href="#" class="btn" data-btn>Battle</a>

          <div class="hero-banner">
            <img src="./assets/images/ijak_logoo.png" width="550" height="520" alt="hero banner" class="w-100">

            <img src="./assets/images/hero-banner-bg.png" alt="" class="hero-banner-bg">
          </div>

        </div>
      </div>





      <!-- 
        - #UPCOMING
      -->

      <section class="section upcoming" aria-labelledby="upcoming-label" id="tournament">
        <div class="container">

          <!-- <p class="section-subtitle" id="upcoming-label" data-reveal="bottom">
            Battles
          </p> -->

          <h2 class="h2 section-title" data-reveal="bottom">
            Battles Extreme <br> Masters <span class="span">Tournament</span>
          </h2>

          <p class="section-text" data-reveal="bottom">
          To Bridge The online game and the real-life game-play through innovation, technology and game design.
          </p>

          <ol class="upcoming-list">

            <li class="upcoming-item">

              <div class="upcoming-card left has-before" data-reveal="left">

                <img src="./assets/images/team-logo-1.png" width="86" height="81" loading="lazy"
                  alt="Purple Death Cadets" class="card-banner">

                <h3 class="h3 card-title">Target Shooting</h3>

                <!-- <div class="card-meta">Group 04 | Match 06th</div> -->

              </div>

              <div class="upcoming-time" data-reveal="bottom">
                <time class="time" datetime="10:00">KILL</time>

                <!-- <time class="date" datetime="2022-05-25">25TH May 2024</time> -->

                <!-- <div class="social-wrapper">
                  <a href="#" class="social-link">
                    <ion-icon name="logo-youtube"></ion-icon>
                  </a>

                  <a href="#" class="social-link">
                    <ion-icon name="logo-twitch"></ion-icon>
                  </a>
                </div> -->
              </div>

              <div class="upcoming-card right has-before" data-reveal="right">

                <img src="./assets/images/team-logo-2.png" width="86" height="81" loading="lazy"
                  alt="Trigger Brain Squad" class="card-banner">

                <h3 class="h3 card-title">Team Battle</h3>
<!-- 
                <div class="card-meta">Group 04 | Match 06th</div> -->

              </div>

            </li>

            <li class="upcoming-item">

              <div class="upcoming-card left has-before" data-reveal="left">

                <img src="./assets/images/team-logo-3.png" width="86" height="81" loading="lazy"
                  alt="The Black Hat Hackers" class="card-banner">

                <h3 class="h3 card-title">PaintBall</h3>

                <!-- <div class="card-meta">Group 05 | Match 02nd</div> -->

              </div>

              <div class="upcoming-time" data-reveal="bottom">
                <time class="time" datetime="12:30">OR</time>

                <!-- <time class="date" datetime="2024-01-10">KILL</time> -->

                <!-- <div class="social-wrapper">
                  <a href="#" class="social-link">
                    <ion-icon name="logo-youtube"></ion-icon>
                  </a>

                  <a href="#" class="social-link">
                    <ion-icon name="logo-twitch"></ion-icon>
                  </a>
                </div> -->
              </div>

              <div class="upcoming-card right has-before" data-reveal="right">

                <img src="./assets/images/team-logo-4.png" width="86" height="81" loading="lazy"
                  alt="Your Worst Nightmare" class="card-banner">

                <h3 class="h3 card-title">Simulator</h3>

                <!-- <div class="card-meta">Group 05 | Match 02nd</div> -->

              </div>

            </li>

            <li class="upcoming-item">

              <div class="upcoming-card left has-before" data-reveal="left">

                <img src="./assets/images/team-logo-5.png" width="86" height="81" loading="lazy"
                  alt="Witches And Quizards" class="card-banner">

                <h3 class="h3 card-title">Gel Baster</h3>

                <!-- <div class="card-meta">Group 02 | Match 03rd</div> -->

              </div>

              <div class="upcoming-time" data-reveal="bottom">
                <time class="time" datetime="04:20">DIE</time>

                <!-- <time class="date" datetime="2024-12-15">DIE</time> -->
<!-- 
                <div class="social-wrapper">
                  <a href="#" class="social-link">
                    <ion-icon name="logo-youtube"></ion-icon>
                  </a>

                  <a href="#" class="social-link">
                    <ion-icon name="logo-twitch"></ion-icon>
                  </a>
                </div> -->
              </div>

              <div class="upcoming-card right has-before" data-reveal="right">

                <img src="./assets/images/team-logo-6.png" width="86" height="81" loading="lazy"
                  alt="Resting Bitch Faces" class="card-banner">

                <h3 class="h3 card-title">Battle park</h3>

                <!-- <div class="card-meta">Group 02 | Match 03rd</div> -->

              </div>

            </li>

          </ol>

        </div>
      </section>





      <!-- 
        - #NEWS
      -->

      <section class="section news" aria-label="our latest news" id="news">
        <div class="container">

          <p class="section-subtitle" data-reveal="bottom">What's On Our Mind</p>

          <h2 class="h2 section-title" data-reveal="bottom">
            News And <span class="span">Headlines</span>
          </h2>

          <p class="section-text" data-reveal="bottom">
            Our success in creating business solutions is due in large part to our talented and highly committed team.
          </p>

          <ul class="news-list">

            <li data-reveal="bottom">
              <div class="news-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 400;">
                  <img src="./assets/images/news-1.jpg" width="600" height="400" loading="lazy"
                    alt="Innovative Business All Over The World." class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-tag">Business</a>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="card-meta-text" datetime="2022-01-01">Jan 01 2022</time>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <p class="card-meta-text">Elliot Alderson</p>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">Innovative Business All Over The World.</a>
                  </h3>

                  <p class="card-text">
                    Financial experts support or help you to to find out which way you can raise your funds more...
                  </p>

                  <a href="#" class="link has-before">Read More</a>

                </div>

              </div>
            </li>

            <li data-reveal="bottom">
              <div class="news-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 400;">
                  <img src="./assets/images/news-2.jpg" width="600" height="400" loading="lazy"
                    alt="How To Start Initiating An Startup In Few Days." class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-tag">Startup</a>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="card-meta-text" datetime="2022-01-01">Jan 01 2022</time>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <p class="card-meta-text">Elliot Alderson</p>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">How To Start Initiating An Startup In Few Days.</a>
                  </h3>

                  <p class="card-text">
                    Financial experts support or help you to to find out which way you can raise your funds more...
                  </p>

                  <a href="#" class="link has-before">Read More</a>

                </div>

              </div>
            </li>

            <li data-reveal="bottom">
              <div class="news-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 400;">
                  <img src="./assets/images/news-3.jpg" width="600" height="400" loading="lazy"
                    alt="Financial Experts Support Help You To Find Out." class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-tag">Finance</a>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="card-meta-text" datetime="2022-01-01">Jan 01 2022</time>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <p class="card-meta-text">Elliot Alderson</p>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">Financial Experts Support Help You To Find Out.</a>
                  </h3>

                  <p class="card-text">
                    Financial experts support or help you to to find out which way you can raise your funds more...
                  </p>

                  <a href="#" class="link has-before">Read More</a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>


  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="section footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="150" height="73" loading="lazy" alt="Unigine logo">
          </a>

          <p class="footer-text">
            Our success in creating business solutions is due in large part to our talented and highly committed team.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.insatgram.com/coding.stella" target=_blank class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-list">

          <p class="title footer-list-title has-after">Usefull Links</p>

          <ul>

            <li>
              <a href="#tournament" class="footer-link">Tournaments</a>
            </li>

            <li>
              <a href="#" class="footer-link">Help Center</a>
            </li>

            <li>
              <a href="#" class="footer-link">Privacy and Policy</a>
            </li>

            <li>
              <a href="#" class="footer-link">Terms of Use</a>
            </li>

            <li>
              <a href="#contact" class="footer-link">Contact Us</a>
            </li>

          </ul>

        </div>

        <div class="footer-list">

          <p class="title footer-list-title has-after">Contact Us</p>

          <div class="contact-item">
            <span class="span">Location:</span>

            <address class="contact-link">
              153 Williamson Plaza, Maggieberg, MT 09514
            </address>
          </div>

          <div class="contact-item">
            <span class="span">Join Us:</span>

            <a href="mailto:Info@gamehive.com" class="contact-link">Info@gamehive.com</a>
          </div>

          <div class="contact-item">
            <span class="span">Phone:</span>

            <a href="tel:+12345678910" class="contact-link">+1 (234) 567-8910</a>
          </div>

        </div>



<!--
  #Contact US
-->

<div class="footer-list" id="contact">
  <p class="title footer-list-title has-after">Contact</p>
    <form action="" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="2" required></textarea>

      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>




        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 iJAK BattleField All Rights Reserved.
        </p>

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up-outline" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - #CUSTOM CURSOR
  -->

  <div class="cursor" data-cursor></div>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>