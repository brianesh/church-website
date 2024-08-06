<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A.C.K KIHUNGURO PARISH</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#index">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#connect">CONNECT</a></li>
                <li><a href="#grow">GROW</a></li>
                <li><a href="#serve">SERVE</a></li>
                <li><a href="#networks">NETWORKS</a></li>
                <li><a href="#missions">MISSIONS</a></li>
                <li><a href="#blog">BLOG</a></li>
                <li><a href="#sermons">SERMONS</a></li>
                <li><a href="#music">MUSIC</a></li>
                <li><a href="#give">GIVE</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div>
            <section id="index" style="background-image: url('includes/background.jpeg');">
                <img src="includes/bg2.jpeg" alt="Church Logo" class="logo">
                <h1>A.C.K Kihunguro Church</h1>
                <h2>Welcome Home</h2>
            </section>
            <br><br><br>
        </div>

        <section class="service-times" style="background-image: url('includes/bg1.jpeg');">
            <h3>SERVICE TIMES</h3><br>
            <div class="service-time-container">
                <div class="service-time">
                    <i class="fas fa-clock"></i>
                    <p>8:30am - 10:15am</p>
                </div>
                <div class="service-time">
                    <i class="fas fa-clock"></i>
                    <p>10:30am - 12:30pm</p>
                </div>
            </div>
        </section>

        <section id="about">
            <h2>About Us</h2>
            <p>Welcome to A.C.K Kihunguro Parish. We are a community of believers...</p>
        </section>

        <section id="connect">
            <h2>Connect</h2>
            <p>Connect with our community through various programs and events...</p>
        </section>

        <section id="grow">
            <h2>Grow</h2>
            <p>Join our Bible study groups and grow in your faith...</p>
        </section>

        <section id="serve" style="background-image: url('includes/bg1.jpeg');">
            <h2>Serve</h2>
            <p>Find out how you can serve in our community and beyond...</p>
        </section>

        <section id="networks">
            <h2>Networks</h2>
            <p>Learn about our different networks and how you can get involved...</p>
        </section>

        <section id="missions">
            <h2>Missions</h2>
            <p>Discover our missions and outreach programs...</p>
        </section>

        <section id="blog">
            <h2>Blog</h2>
            <p>Read our latest blog posts and updates...</p>
        </section>

        <section id="sermons" style="background-color: green; padding: 20px;">
            <h2>Sermons</h2>
            <p>Listen to our latest sermons and teachings...</p>
            <div class="sermon-videos">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_3" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>

        <section id="music" style="background-color: #898989; padding: 20px;">
            <h2>Music</h2>
            <p>Enjoy our worship music and choir performances...</p>
            <div class="youtube-videos">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_5" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>

        <section id="give" style="background-color: #e0f7fa; padding: 20px;">
            <h2>Give</h2>
            <p>Support our church by giving online...</p>

            <form action="process_donation.php" method="post">
                <h3>Pay via M-Pesa</h3>
                <label for="amount">Amount:</label>
                <input type="number" id="amount" name="amount" required min="1" placeholder="Enter amount">

                <fieldset>
                    <legend>Donation Type:</legend>
                    <label>
                        <input type="radio" name="donation_type" value="tithe" required>
                        Tithe
                    </label>
                    <label>
                        <input type="radio" name="donation_type" value="offering">
                        Offering
                    </label>
                    <label>
                        <input type="radio" name="donation_type" value="thanksgiving">
                        Thanksgiving
                    </label>
                    <label>
                        <input type="radio" name="donation_type" value="development">
                        Development
                    </label>
                </fieldset>

                <label for="donor_name">Name:</label>
                <input type="text" name="donor_name" id="donor_name" required><br>

                <label for="donor_email">Email (optional):</label>
                <input type="email" name="donor_email" id="donor_email"><br>

                <label for="donor_phone_number">Phone Number (optional):</label>
                <input type="text" name="donor_phone_number" id="donor_phone_number"><br>

                <button type="submit">Donate via M-Pesa</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 A.C.K KIHUNGURO PARISH. All rights reserved.</p>
        <div class="social-links">
            <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
        </div>
    </footer>

    <button id="back-to-top"><i class="fas fa-chevron-up"></i><br>TOP</button>
    <script src="js/script.js"></script>
</body>
</html>
