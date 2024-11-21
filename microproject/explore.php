<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thinkfix</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            padding: 0;
        }
        .section-title {
            font-weight: bold;
            margin-top: 30px;
        }
        .subject-list {
            margin-bottom: 20px;
        }
        .container {
            background-color: #f4f6f9;
        }
        .highlight {
            background-color: yellow;
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
    </header>
<div class="container">
    <div class="row">
        <!-- Math Section -->
        <div class="col-md-4">
            <div class="subject-list">
                <h4 class="section-title">Math</h4>
                <ul class="list-unstyled">
                    <li><a href="class1m.php">Class 1</a></li><br>
                    <li><a href="#">Class 2</a></li><br>
                    <li><a href="#">Class 3</a></li><br>
                    <li><a href="#">Class 4</a></li><br>
                    <li><a href="#">Class 5</a></li><br>
                    <li><a href="#">Class 6</a></li><br>
                    <li><a href="#">Class 7</a></li><br>
                    <li><a href="#">Class 8</a></li><br>
                    <hr>
                </ul>
            </div>
        </div>

        <!-- Science Section -->
        <div class="col-md-4">
            <div class="subject-list">
                <h4 class="section-title">Science</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Class 1</a></li><br>
                    <li><a href="#">Class 2</a></li><br>
                    <li><a href="#">Class 3</a></li><br>
                    <li><a href="#">Class 4</a></li><br>
                    <li><a href="#">Class 5</a></li><br>
                    <li><a href="#">Class 6</a></li><br>
                    <hr>
                </ul>
            </div>
        </div>

        <!-- English Section -->
        <div class="col-md-4">
            <div class="subject-list">
                <h4 class="section-title">English</h4>
                <ul class="list-unstyled">
                    <li><a href="Class1e.php">Class 1</a></li><br>
                    <li><a href="Class2e.php">Class 2</a></li><br>
                    <li><a href="Class3e.php">Class 3</a></li><br>
                    <li><a href="Grammar.php">Grammar</a></li><br>
                    <hr>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Social Science Section -->
        <div class="col-md-4">
            <div class="subject-list">
                <h4 class="section-title">Social Science</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Class 6</a></li><br>
                    <li><a href="#">Class 7</a></li><br>
                    <li><a href="#">Class 8</a></li><br>
                    <li><a href="#">Class 9</a></li><br>
                    <hr>
                </ul>
            </div>
        </div>

        <!-- Value Education Section -->
        <div class="col-md-4">
            <div class="subject-list">
                <h4 class="section-title">Value Education</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Class 1</a></li><br>
                    <li><a href="#">Class 2</a></li><br>
                    <li><a href="#">Class 3</a></li><br>
                    <li><a href="#">Class 4</a></li><br>
                    <li><a href="#">Class 5</a></li><br>
                    <hr>
                </ul>
            </div>
        </div>

        <!-- More Guides for Educators Section -->
        <div class="col-md-4">
            <div class="subject-list">
                <h4 class="section-title">More Guides for Educators</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Guides for Educators (Beginner)</a></li>
                    <li><a href="#">Guides for Educators (Mentors)</a></li>
                    <hr>
                </ul>
            </div>
        </div>
    </div>
</div>
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