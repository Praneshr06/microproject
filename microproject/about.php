<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thinkfix Education - Learning Platform</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .contact-info {
            font-size: 14px;
            color: #333;
            margin-top: 10px;
        }

        .contact-info a {
            color: #007BFF;
            text-decoration: none;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        .navbar-brand img {
            width: 150px; /* Adjust the logo size */
        }

        .navbar-nav {
            flex-direction: row;
        }

        .nav-link {
            padding: 10px 15px;
        }

        .search-bar {
            display: flex;
            align-items: center;
        }

        .search-input {
            width: auto;
            margin-right: 5px;
        }

        .info-section {
            padding: 20px;
            background-color: #f9f9f9;
        }

        .info-content {
            margin: 15px 0;
        }

        .concept-section {
            padding: 20px;
            background-color: #ffffff;
        }

        .concept h3 {
            margin: 0;
            font-size: 1.5rem;
        }

        .concept p {
            margin: 5px 0 0;
            font-size: 1rem;
        }

        .footer {
            background-color: #f1f1f1;
            padding: 20px;
        }

        .footer-columns {
            display: flex;
            justify-content: space-between;
        }

        .footer-column {
            width: 30%;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: #007BFF;
            text-decoration: none;
        }

        .footer-column ul li a:hover {
            text-decoration: underline;
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
    </header>

    <!-- Additional Info Sections -->
    <section class="info-section">
        <div class="container">
            <h2>Our Initiatives</h2>
            <div class="info-content">
                <h3>News</h3>
                <p>Stay updated with the latest news and developments from Thinkfix Education, including new programs, partnerships, and success stories. Our commitment to transparency and communication keeps our community informed about our progress and the impact we are making in education.</p>
            </div>
            
            <div class="info-content">
                <h3>Impact</h3>
                <p>Discover how Thinkfix Education is making a difference in the lives of learners around the world. Through our educational programs and initiatives, we have impacted thousands of students by providing them with access to quality resources, mentorship, and support.</p>
            </div>
            
            <div class="info-content">
                <h3>Our Team</h3>
                <p>Meet the dedicated team behind Thinkfix Education, committed to providing quality education and resources to learners everywhere. Our team consists of educators, content creators, and passionate volunteers who share a common goal: to democratize education and make it accessible to all.</p>
            </div>
            
            <div class="info-content">
                <h3>Our Interns</h3>
                <p>Learn about the invaluable contributions of our interns, who bring fresh ideas and perspectives to our organization while gaining real-world experience. Our internship program provides students with the opportunity to work on impactful projects, develop professional skills, and make meaningful contributions to the community.</p>
            </div>
            
            <div class="info-content">
                <h3>Our Content Specialists</h3>
                <p>Explore the expertise of our content specialists who develop and curate high-quality educational materials tailored to meet the needs of diverse learners. These specialists are dedicated to ensuring that our resources are not only informative but also engaging and accessible.</p>
            </div>
        </div>
    </section>

    <!-- Concept Section -->
    <section class="concept-section">
        <div class="container">
            <h2>Concepts We Cover</h2>
            <div class="row">
                <div class="col-md-4 concept">
                    <h3>News</h3>
                    <p>Latest updates on our programs and initiatives, highlighting important milestones and achievements.</p>
                </div>
                <div class="col-md-4 concept">
                    <h3>Impact</h3>
                    <p>Reports on how our programs are influencing learners and communities worldwide, focusing on success metrics.</p>
                </div>
                <div class="col-md-4 concept">
                    <h3>Our Team</h3>
                    <p>Meet the passionate individuals who work tirelessly to provide quality education to all.</p>
                </div>
                <div class="col-md-4 concept">
                    <h3>Our Interns</h3>
                    <p>Spotlighting innovative projects and ideas from our talented interns.</p>
                </div>
                <div class="col-md-4 concept">
                    <h3>Our Content Specialists</h3>
                    <p>Introducing experts who create engaging and effective learning materials.</p>
                </div>
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
