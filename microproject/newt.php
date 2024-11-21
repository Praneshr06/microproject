<?php
session_start();

// Check if the session for 'email' and 'userType' is set and if user is a teacher
if (!isset($_SESSION['email']) || $_SESSION['userType'] !== 'teacher') {
    header('location: logt.php'); // Redirect to login page if not a teacher or not logged in
    exit();
}

include 'server.php'; // Include server connection

// Retrieve user details from the session
$email = $_SESSION['email'];
$query = mysqli_query($con, "SELECT * FROM signup WHERE email='$email'") or die(mysqli_error($con));

if ($fetch = mysqli_fetch_array($query)) {
    $firstName = htmlspecialchars($fetch['firstName'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($fetch['email'], ENT_QUOTES, 'UTF-8');
} else {
    echo "<p style='color:red;'>User not found.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thinkfix Education - Teacher Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="teacher.css">
    <style>
        .contact-info {
            margin-left: 50px;
            font-size: 14px;
            color: #333;
            border: 1px solid #007BFF;
            border-radius: 10px;
            padding: 10px;
            background-color: #f9f9f9;
        }

        .contact-info a {
            color: #007BFF;
            text-decoration: none;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        /* Stylish font style */
        .stylish {
            font-family: "Georgia", Gadget, sans-serif;
            margin-right: 100px;
            font-size: 30px;
            color: white;
        }
    </style>
</head>
<body>
<header>
        <div class="navbar">
            <a href="#"><img src="logo.png" alt="Thinkfix Education Logo" class="logo"></a>
            <div class="nav-links">
                <a href="home.php">Home</a>
                <a href="explore.php">Explore</a>
                <a href="about.php">About</a>
                <a href="sign.php">Sign up</a>
                <a href="log.php">Login cubs</a>
                <a href="logt.php">Login Masters</a>
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
            <!-- Welcome Message -->
    <div class="stylish">
        <?php
        // Display the welcome message with the user's first name and email
        if (isset($firstName) && isset($email)) {
            echo "<h2>Welcome Back, $firstName!</h2>";
            echo "<p>Email: $email</p>";
        }
        ?>
    </div>
    </header>

    <section class="container">
        <div class="card">
            <h2>It's better with students!</h2>
            <p>Get a live view into your students' progress, targeted assignment recommendations, and so much more!</p>
            <button class="create-class-btn" onclick="window.location.href='link.php'">Create a class</button>
            <div class="avatars">
                <div class="avatar" style="background-image: url('student8.png');" aria-label="Student 1"></div>
                <div class="avatar" style="background-image: url('student9.png');" aria-label="Student 2"></div>
                <div class="avatar" style="background-image: url('student10.png');" aria-label="Student 3"></div>
            </div>
        </div>
    </section>

    <!-- Hero section -->
    <section class="hero">
        <div class="hero-content">
            <img src="student1.png" alt="Student" class="student-image">
            <div class="hero-text">
                <h1>For every student, every classroom. Real results.</h1>
                <p>We’re a nonprofit with the mission to provide a free, world-class education for anyone, anywhere.</p>
                <div class="buttons">
                    <a href="log.php"><button>Learners</button></a>
                    <a href="newt.php"><button>Teachers</button></a>
                </div>
            </div>
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
