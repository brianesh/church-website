<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Official website of A.C.K Kihunguro Parish. Join us for worship, community events, and more.">
    <title>A.C.K Kihunguro Parish</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">HOME</a></li>
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
    <section id="home" class="hero" style="background-image: url('includes/background.jpeg');">
    <div class="hero-content">
        <img src="includes/bg2.jpeg" alt="A.C.K Kihunguro Church Logo" class="logo">
        <h1>Welcome to A.C.K Kihunguro Church</h1>
        <p>Your spiritual home and community. Join us for worship, fellowship, and growth.</p>
        <p>Upcoming Event: <strong>Community Picnic</strong> - August 20th at 10:00 AM</p>
    </div>
</section>


        <section class="service-times" style="background-image: url('https://images.unsplash.com/photo-1534137667199-675a46e143f3');">
            <h3>SERVICE TIMES</h3>
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
    <p>At A.C.K Kihunguro Parish, our mission is to live out the teachings of Christ by fostering a community of faith, hope, and love. We are dedicated to serving our members and the greater community through outreach, spiritual growth, and support.</p>
    <h3>Our History</h3>
    <p>Founded in 1980, A.C.K Kihunguro Parish has grown from a small gathering of believers to a vibrant and active community. Over the years, we have been involved in numerous outreach programs and community services.</p>
    <h3>Meet Our Leadership</h3>
    <div class="leaders">
        <div class="leader">
            <img src="includes/pastor.jpg" alt="Pastor John Doe">
            <h4>Pastor John Doe</h4>
            <p>Senior Pastor</p>
        </div>
        <!-- Add more leaders as needed -->
    </div>
</section>


        <section id="connect" style="background-image: url('https://images.unsplash.com/photo-1477768663690-7f0d40b729b6');">
            <h2>Connect</h2>
            <p>Connect with our community through various programs and events. Join us for fellowship, support groups, and more...</p>
        </section>

        <section id="grow" style="background-image: url('https://images.unsplash.com/photo-1517260739337-6ef34120f0d1');">
            <h2>Grow</h2>
            <p>Join our Bible study groups, attend workshops, and participate in activities designed to help you grow in your faith...</p>
        </section>

        <section id="serve" style="background-image: url('https://images.unsplash.com/photo-1521412644187-c49fa049e84d');">
            <h2>Serve</h2>
            <p>Discover opportunities to serve within our community and beyond. We offer various programs where you can contribute your skills and time...</p>
        </section>

        <section id="networks" style="background-image: url('https://images.unsplash.com/photo-1520376351808-54a07bf175d5');">
            <h2>Networks</h2>
            <p>Join our network of believers, share experiences, and grow together in faith. We believe in the power of community...</p>
        </section>

        <section id="missions" style="background-image: url('https://images.unsplash.com/photo-1521412644187-c49fa049e84d');">
            <h2>Missions</h2>
            <p>We are actively involved in missions locally and internationally. Learn more about our mission work and how you can get involved...</p>
        </section>

        <section id="blog" style="background-image: url('https://images.unsplash.com/photo-1477768663690-7f0d40b729b6');">
            <h2>Blog</h2>
            <p>Read our latest blog posts on faith, community, and living a Christian life. Stay informed and inspired by our dedicated writers...</p>
        </section>

        <section id="sermons" style="background-image: url('https://images.unsplash.com/photo-1517260739337-6ef34120f0d1');">
            <h2>Sermons</h2>
            <p>Watch our latest sermons online. Stay connected with our teachings even when you can't be with us in person...</p>
            <div class="sermon-videos">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/example" frameborder="0" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/example" frameborder="0" allowfullscreen></iframe>
            </div>
        </section>

        <section id="music" style="background-image: url('https://images.unsplash.com/photo-1520376351808-54a07bf175d5');">
            <h2>Music</h2>
            <p>Enjoy uplifting and inspiring music from our choir and guest artists. Watch videos and listen to our latest tracks...</p>
            <div class="youtube-videos">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/example" frameborder="0" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/example" frameborder="0" allowfullscreen></iframe>
            </div>
        </section>

        <section id="give" style="background-image: url('https://images.unsplash.com/photo-1520376351808-54a07bf175d5');">
            <h2>Give</h2>
            <p>Your generosity helps us continue our mission and serve our community. Donate through M-Pesa or other methods...</p>
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
        <div class="social-links">
            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
        <p>&copy; 2024 A.C.K Kihunguro Parish. All Rights Reserved.</p>
    </footer>

    <button id="back-to-top" title="Back to top"><i class="fas fa-arrow-up"></i></button>

    <script src="js/scripts.js"></script>
</body>
</html>
