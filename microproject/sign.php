<?php
// Initialize variables
$registered = 0;
$userExists = 0;
$userType = ''; // Variable to hold user type (student or teacher)

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Include server.php for database connection
    include 'server.php';
    
    // Retrieve form data and sanitize
    $fname = mysqli_real_escape_string($con, $_POST['firstName']);
    $lname = mysqli_real_escape_string($con, $_POST['lastName']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']); // Get date of birth
    $standard = mysqli_real_escape_string($con, $_POST['standard']); // Get standard
    $userType = mysqli_real_escape_string($con, $_POST['userType']); // Get user type

    // Check if the user already exists
    $sql_check = "SELECT * FROM signup WHERE email='$email'";
    $result_check = mysqli_query($con, $sql_check);

    if ($result_check) {
        $num = mysqli_num_rows($result_check);
        if ($num > 0) {
            $userExists = 1;
        } else {
            // Insert new user
            $sql_insert = "INSERT INTO signup (firstName, lastName, email, password, dob, standard, userType) VALUES ('$fname', '$lname', '$email', '$password', '$dob', '$standard', '$userType')";
            $result_insert = mysqli_query($con, $sql_insert);
            if ($result_insert) {
                $registered = 1;
                // Redirect based on user type
                header('Location: ' . ($userType == 'teacher' ? 'logt.php' : 'log.php'));
                exit(); // Make sure to exit after redirection
            } else {
                // Handle insertion error
                die("Error: " . mysqli_error($con));
            }
        }
    } else {
        // Handle query error
        die("Error: " . mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* CSS for background animation */
    body {
      overflow: hidden;
    }
    .animated-bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(-45deg, #EE7752, #E73C7E, #0033bf, #23D5AB, #a19895, #2acf00, #23A6D5, #ab038c);
      background-size: 400% 400%;
      animation: gradient 10s ease infinite;
    }
    @keyframes gradient {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
    }
    .form-control {
      height: 50px; /* Increased height for input fields */
    }
    .btn {
      height: 50px; /* Increased height for buttons */
    }
    .form-container {
      max-height: 600px; /* Increased maximum height for the form container */
      overflow-y: auto; /* Enable vertical scrolling */
      padding: 20px; /* Add padding for better appearance */
    }
  </style>
</head>
<body>
<div class="animated-bg"></div>
<!-- Registration Form -->
<section class="bg-light py-3 py-md-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
          <div class="card border border-light-subtle rounded-3 shadow-lg">
            <div class="card-body p-3 p-md-2 form-container"> <!-- Added class for scrolling -->
              <h1 class="fs-60 text-center text-secondary mb-4">SIGN UP</h1>

              <form method="post">
                <div class="row gy-2 overflow-hidden">
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" required>
                      <label for="firstName" class="form-label">First Name</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" required>
                      <label for="lastName" class="form-label">Last Name</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                      <label for="email" class="form-label">Email</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                      <label for="password" class="form-label">Password</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="date" class="form-control" name="dob" id="dob" required>
                      <label for="dob" class="form-label">Date of Birth</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <label for="standard" class="form-label"></label>
                      <select class="form-select" name="standard" id="standard" >
                        <option value="" disabled selected>Select your standard</option>
                        <option value="6">6th</option>
                        <option value="7">7th</option>
                        <option value="8">8th</option>
                        <option value="9">9th</option>
                        <option value="10">10th</option>
                        <option value="11">11th</option>
                        <option value="12">12th</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">

                      <select class="form-select" name="userType" id="userType" >
                        <option value="" disabled selected>Select your user type</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                      <label class="form-check-label text-secondary" for="iAgree">
                        I agree to the <a href="#!" class="link-primary text-decoration-none">terms and conditions</a>
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid my-3">
                      <button class="btn btn-primary btn-lg" type="submit">Sign up</button>
                      <button type="reset" class="btn btn-secondary btn-lg">Reset</button> <!-- Reset button -->
                    </div>
                  </div>
                  <div class="col-12">
                    <p class="m-0 text-secondary text-center">Already have an account? <a href="log.php" class="link-primary text-decoration-none">Log in</a></p>
                  </div>
                  <div class="page-item"><a class="page-link" href="home.php">Back</a></div>
                </div>
              </form>
              
              <!-- Display success or error message -->
              <?php if ($registered): ?>
                <div class="alert alert-success mt-3" role="alert">
                  Registration successful! Redirecting...
                </div>
              <?php elseif ($userExists): ?>
                <div class="alert alert-danger mt-3" role="alert">
                  User already exists.
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
