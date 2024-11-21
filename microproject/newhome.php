<?php
session_start();
if(!isset($_SESSION['email'])) {
    header('location:newhome.php');
    exit;
}

// Include the server connection file
include 'server.php';

// Check if the session variable `email` is set
if (isset($_SESSION['email'])) {
    // Sanitize the email to prevent SQL injection
    $email = mysqli_real_escape_string($con, $_SESSION['email']);

    // Query the database to get the user details based on email
    $query = mysqli_query($con, "SELECT * FROM `signup` WHERE `email`='$email'") or die(mysqli_error($con));

    // Fetch the result
    if ($fetch = mysqli_fetch_array($query)) {
        // Store the retrieved name and email
        $firstName = htmlspecialchars($fetch['firstName'], ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($fetch['email'], ENT_QUOTES, 'UTF-8');
    } else {
        echo "<p style='color:red;'>User not found.</p>";
    }
} else {
    echo "<p style='color:red;'>Session not set.</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thinkfix Education - Learning Platform</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .contact-info {
            margin-left: 20px; /* Add some space from the navigation links */
            font-size: 14px; /* Adjust font size */
            color: #333; /* Change text color */
            border: 1px solid #007BFF; /* Border color */
            border-radius: 5px; /* Rounded corners */
            padding: 10px; /* Padding inside the box */
            background-color: #f9f9f9; /* Light background color */
        }

        .contact-info a {
            color: #007BFF; /* Change link color */
            text-decoration: none; /* Remove underline */
        }

        .contact-info a:hover {
            text-decoration: underline; /* Underline on hover */
        }
    </style>
</head>
<body>
    <!-- Header section -->
    <header>
        <div class="navbar">
            <a href="#"><img src="logo.png" alt="Thinkfix Education Logo" class="logo"></a>
            <div class="nav-links">
                <a href="home.php">Home</a>
                <a href="explore.php">Explore</a>
                <a href="about.php">About</a>
                <a href="sign.php">Sign up</a>
                <a href="home.php">Log out</a>
            </div>
            <!-- Search bar -->
            <div class="search-bar">
                <form action="javascript:void(0);">
                    <input type="text" id="searchInput" name="query" placeholder="Search courses..." class="search-input" onkeyup="searchCourses()">
                    <button type="button" onclick="searchCourses()" class="search-button">Search</button>
                </form>
            </div>
            <!-- Contact Information -->
            <div class="contact-info">
                <p>Email: <a href="mailto:info@thinkfixeducation.org">info@thinkfixeducation.org</a></p>
                <p>Phone: <a href="tel:+1234567890">+1 (234) 567-890</a></p>
            </div>
        </div>
    <title>Welcome Back! </title>
    <style>
        /* Stylish font style */
        .stylish {
            font-family: "Georgia", Gadget, sans-serif;
            margin-right: 100px;
            font-size: 40px;
            color:  white; /* You can adjust the color as per your preference */
        }
    </style>
</head>
<body>
<?php
            // Display the welcome message with the user's first name and email
            if (isset($firstName) && isset($email)) {
                echo "<h2>Welcome Back, $firstName!</h2>";
                echo "<p>Email: $email</p>";
            }
            ?>
</body>
    </header>
</html>
     <!-- Hero section -->
<section class="hero">
    <div class="hero-content">
        <img src="student1.png" alt="Student" class="student-image">
        <div class="hero-text">
            <h1>For every student, every classroom. Real results.</h1>
            <p>We’re a nonprofit with the mission to provide a free, world-class education for anyone, anywhere.</p>
            <div class="buttons">
                <a href="log.php"><button>Learners</button></a>
                <a href="logt.php"><button>Teachers</button></a>
            </div>
        </div>
    </div>
</section>


    <!-- Courses section -->
    <section class="courses">
        <div class="courses-menu">
            <h2>Courses</h2>
            <ul>
                <li><a href="log.php">Grade 6th</a></li>
                <li><a href="log.php">Grade 7th</a></li>
                <li><a href="log.php">Grade 8th</a></li>
                <li><a href="log.php">Grade 9th</a></li>
                <li><a href="log.php">Grade 10th</a></li>
                <li><a href="log.php">Grade 11th</a></li>
                <li><a href="log.php">Grade 12th</a></li>
            </ul>
        </div>
    </section>       

 <!-- Why Thinkfix section -->
 <section class="why-thinkfix">
        <h2>How Thinkfix Education works?</h2>
        <div class="features">
            <div class="feature">
                <img src="personalized_learning_icon.png" alt="Personalized learning">
                <h3>Personalized learning</h3>
                <p>Students practice at their own pace, first filling in gaps in their understanding and then accelerating their learning.</p>
            </div>
            <div class="feature">
                <img src="trusted_content_icon.png" alt="Trusted content">
                <h3>Trusted content</h3>
                <p>Created by experts, Thinkfix Education’s library of trusted, standards-aligned practice and lessons covers math, science, and more.</p>
            </div>
            <div class="feature">
                <img src="empower_teachers_icon.png" alt="Tools for teachers">
                <h3>Tools to empower teachers</h3>
                <p>With Thinkfix Education, teachers can identify gaps in their students’ understanding, tailor instruction, and meet the needs of every student.</p>
            </div>
        </div>
    </section>

    <!-- Teacher section -->
    <section class="testimonial-section">
        <div class="testimonial-content">
            <!-- Circle images -->
            <div class="circle-images">
                <img src="student2.png" alt="Student 1" class="circle-image">
                <img src="student3.png" alt="Student 2" class="circle-image">
                <img src="student4.png" alt="Student 3" class="circle-image">
            </div>

            <!-- Testimonial text -->
            <div class="testimonial-text">
                <h4>Teachers</h4>
                <blockquote>
                    <p>“I’m finally able to truly differentiate my classroom. This has been priceless for my students’ engagement.”</p>
                    <cite>Udaya Lakshmi Palapala / Middle School Coordinator / Hyderabad, Telangana</cite>
                </blockquote>
                <p>We empower teachers to support their entire classroom. 90% of U.S. teachers who have used Thinkfix Education have found it effective.</p>
                <a href="logt.php"><button class="cta-button">Teachers, start here</button></a>
            </div>
        </div>
    </section>
    <?php
    require 'server.php'; // Ensure the server.php file exists and contains the database connection setup

    // Check if the session variable is set
    if (isset($_SESSION['firstName'])) {
        // Sanitize the input to prevent SQL injection
        $firstName = mysqli_real_escape_string($con, $_SESSION['firstName']);

        // Correct SQL query syntax
        $query = mysqli_query($con, "SELECT * FROM `signup` WHERE `firstName`='$firstName'") or die(mysqli_error($con));

        // Fetch the result
        if ($fetch = mysqli_fetch_array($query)) {
            // Display the results
            echo "<h6 class='text-success'>" . htmlspecialchars($fetch['firstName'], ENT_QUOTES, 'UTF-8') ."</h6>";
            echo "<p style='color:green;'>" . htmlspecialchars($fetch['email'], ENT_QUOTES, 'UTF-8') . "</p>";
        } else {
            // Handle the case where no matching user is found
            echo "<p style='color:red;'>User not found.</p>";
        }
    } else {
        // Handle the case where the session variable is not set
        echo "<p style='color:red;'>Session not set.</p>";
    }
    ?>
    <section class="learners-section">
        <div class="content-container">
            <!-- Text Content -->
            <div class="text-content">
                <h4>LEARNERS AND STUDENTS</h4>
                <h1><span class="highlight">You</span> can learn anything.</h1>
                <p>Build a deep, solid understanding in math, science, grammar, history, SAT®, and more.</p>
                <a href="log.php"><button class="cta-button">Learners, start here</button></a>
            </div>
            <?php
    require 'server.php'; // Ensure the server.php file exists and contains the database connection setup

    // Check if the session variable is set
    if (isset($_SESSION['firstName'])) {
        // Sanitize the input to prevent SQL injection
        $firstName = mysqli_real_escape_string($con, $_SESSION['firstName']);

        // Correct SQL query syntax
        $query = mysqli_query($con, "SELECT * FROM `signup` WHERE `firstName`='$firstName'") or die(mysqli_error($con));

        // Fetch the result
        if ($fetch = mysqli_fetch_array($query)) {
            // Display the results
            echo "<h1 class='text-success'>" . htmlspecialchars($fetch['firstName'], ENT_QUOTES, 'UTF-8') ."</h1>";
            echo "<p style='color:white;'>" . htmlspecialchars($fetch['email'], ENT_QUOTES, 'UTF-8') . "</p>";
        } else {
            // Handle the case where no matching user is found
            echo "<p style='color:red;'>User not found.</p>";
        }
    } else {
        // Handle the case where the session variable is not set
        echo "<p style='color:red;'>Session not set.</p>";
    }
    ?>
            <!-- Graphic Image (you can replace this with an actual image) -->
            <div class="graphic-content">
                <img src="student5.png" alt="Illustrative Graphic">
            </div>
        </div>
    </section>

    <!-- Testimonial section -->
    <section class="testimonial">
        <blockquote>
            <p>“I come from a poor family. At home it’s one room, just a room we live in. When I was a child, I used to fear mathematics. But now, I am in love with mathematics because of Thinkfix Education.”</p>
            <cite>
                <img src="student6.png" alt="Student Image">
                Anjali, India
            </cite>
        </blockquote>
    </section>

    <!-- Every child deserves the chance to learn section -->
    <section class="every-child">
        <div class="child-content">
            <h2>Every child deserves the chance to learn.</h2>
            <p>Across the globe, 617 million children are missing basic math and reading skills. We are proud of delivering the education they need, and we need your help. You can change the course of a child’s life.</p>
            <a href="log.php"><button class="cta-button">Give them a chance.</button></a>
        </div>
        <img src="student7.png" alt="Child Learning" class="child-image">
    </section>

    <!-- Join Thinkfix Education today section -->
    <section class="join-today">
        <h2>Join Thinkfix Education today</h2>
        <div class="join-buttons">
            <a href="log.php"><button class="cta-button">Learners</button></a>
            <a href="logt.php"><button class="cta-button">Teachers</button></a>
            <a href="log.php"><button class="cta-button">Today's class</button></a>
        </div>
    </section>

    <!-- Key supporters section -->
    <section class="supporters">
        <h3>Key supporters</h3>
        <div class="supporters-logos">
            <img src="kec.png" alt="kec">
            <img src="agaram.png" alt="agaram">
            <img src="bill gates.png" alt="Bill & Melinda Gates Foundation">
            <img src="ecp.png" alt="ecp Foundation">
            <img src="tata.png" alt="Tata Trusts">
            <img src="maatram.png" alt="maatram Foundation">
        </div>
    </section>

    <!-- Footer section -->
    <footer class="footer">
        <div class="footer-top">
            <div class="mission">
                <p>Our mission is to provide a free, world-class education to anyone, anywhere.</p>
                <p>Thinkfix Education is a 501(c)(3) nonprofit organization. <a href="#">Donate</a> or <a href="#">volunteer</a> today!</p>
            </div>
            <div class="footer-columns">
                <div class="footer-column">
                    <h4>About</h4>
                    <ul>
                    <ul>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Impact</a></li>
                        <li><a href="#">Our team</a></li>
                        <li><a href="#">Our interns</a></li>
                        <li><a href="#">Our content specialists</a></li>
                        <li><a href="#">Our leadership</a></li>
                        <li><a href="#">Our supporters</a></li>
                        <li><a href="#">Our contributors</a></li>
                        <li><a href="#">Our finances</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Internships</a></li>
                        <li><a href="#">Cookie Preferences</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="#">Help center</a></li>
                        <li><a href="#">Support community</a></li>
                        <li><a href="#">Share your story</a></li>
                        <li><a href="#">Press</a></li>
                    </ul>
                    
                </div>
                <div class="footer-column">
                    <h4>Courses</h4>
                    <ul>
                        <li><a href="#">Grade 6th</a></li>
                        <li><a href="#">Grade 7th</a></li>
                        <li><a href="#">Grade 8th</a></li>
                        <li><a href="#">Grade 9th</a></li>
                        <li><a href="#">Grade 10th</a></li>
                        <li><a href="#">Grade 11th</a></li>
                        <li><a href="#">Grade 12th</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-left">
                <div class="language-selector">
                    <p>Language: <a href="#">English</a></p>
                </div>
                
                <p>&copy; 2024 Thinkfix Education | <a href="#">Terms of use</a> | <a href="#">Privacy Policy</a> | <a href="#">Cookie Notice</a></p>
            </div>
            <div class="social-icons">
                <a href="#"><img src="facebook.png" alt="Facebook"></a>
                <a href="#"><img src="twitter.png" alt="Twitter"></a>
                <a href="#"><img src="instagram.png" alt="Instagram"></a>
            </div>
        </div>
    </footer>
    <script>
    function searchCourses() {
        const query = document.getElementById("searchInput").value.toLowerCase().trim();
        const links = document.querySelectorAll("a");
        let matchFound = false;

        links.forEach(link => {
            const text = link.textContent.toLowerCase();
            if (text.includes(query) && query !== "") {
                link.classList.add("highlight");
                matchFound = true;
                link.scrollIntoView({ behavior: "smooth", block: "center" });
            } else {
                link.classList.remove("highlight");
            }
        });

        if (!matchFound && query !== "") {
            alert(`No results found for '${query}'.`);
        }
    }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>