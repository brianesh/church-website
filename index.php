<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Official website of A.C.K Kihunguro Parish. Join us for worship, community events, and more.">
    <title>A.C.K Kihunguro Parish</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Example of sticky navigation */
        nav {
            position: sticky;
            top: 0;
            background: white;
            z-index: 1000;
        }
        /* Example of a smooth scrolling effect */
        html {
            scroll-behavior: smooth;
        }
        .hero {
            background-size: cover;
            background-position: center;
            height: 400px;
            color: white;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hero-content {
            background: rgba(0, 0, 0, 0.5); /* Improved text readability */
            padding: 20px;
            border-radius: 10px;
        }
        #back-to-top {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #000;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
            z-index: 1000;
        }
        #back-to-top i {
            font-size: 20px;
        }
        /* Common background properties for all sections */
        section {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            padding: 60px 20px;
            text-align: center;
            min-height: 600px; /* Adjust as needed */
        }

        section h2, section h3 {
            background-color: rgba(0, 0, 0, 0.5); /* To improve text readability */
            display: inline-block;
            padding: 10px 20px;
            border-radius: 10px;
        }

        section p {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 15px;
            border-radius: 10px;
            display: inline-block;
        }
    </style>
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
                <h1>A.C.K Kihunguro Church</h1>
                <h2>Welcome Home</h2>
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
            <p>Welcome to A.C.K Kihunguro Parish. We are a community of believers committed to growing in faith, serving others, and making a difference in the world...</p>
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

        <section id="networks" style="background-image: url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0');">
            <h2>Networks</h2>
            <p>Learn about our different networks and how you can become involved in various outreach and support initiatives...</p>
        </section>

        <section id="missions" style="background-image: url('https://images.unsplash.com/photo-1494232410401-ad00d5433cfa');">
            <h2>Missions</h2>
            <p>Explore our mission efforts and outreach programs designed to make a positive impact locally and globally...</p>
        </section>

        <section id="blog" style="background-image: url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0');">
            <h2>Blog</h2>
            <p>Stay updated with our latest news, articles, and insights from our community and beyond...</p>
        </section>

        <section id="sermons" style="background-image: url('https://images.unsplash.com/photo-1517260739337-6ef34120f0d1');">
            <h2>Sermons</h2>
            <p>Watch our latest sermons and teachings from our pastors and guest speakers...</p>
            <div class="sermon-videos">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_3" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>

        <section id="music" style="background-image: url('https://images.unsplash.com/photo-1517260739337-6ef34120f0d1');">
            <h2>Music</h2>
            <p>Enjoy our worship music and choir performances. Listen to our latest songs and albums...</p>
            <div class="youtube-videos">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_5" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>

        <section id="give" style="background-image: url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0');">
            <h2>Give</h2>
            <p>Your generosity helps us continue our mission and outreach. Learn how you can support A.C.K Kihunguro Parish through donations, tithes, and offerings...</p>
            <div class="donation-options">
                <h3>M-Pesa</h3>
                <p>Paybill: 123456<br>Account: YourName</p>
            </div>
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
        <p>&copy; 2024 A.C.K Kihunguro Parish. All Rights Reserved.</p>
        <div class="social-links">
            <a href="https://www.youtube.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
            <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>

    <button id="back-to-top" onclick="scrollToTop()">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Back to top button functionality
        const backToTopButton = document.getElementById('back-to-top');
        window.onscroll = function () {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        };

        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>
</body>
</html>

