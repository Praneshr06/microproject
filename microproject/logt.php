<?php
$logged = 0;
$invalid = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include 'server.php'; // Include database connection file
  
  // Sanitize and retrieve user input
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  
  // Query to check the user credentials
  $sql = "SELECT * FROM signup WHERE email='$email' AND password='$password'";
  $result = mysqli_query($con, $sql);
  
  if ($result) {
    $row = mysqli_fetch_assoc($result);
    
    if ($row) {
      if ($row['userType'] === 'teacher') {  // Check if user is a teacher
        $logged = 1;
        session_start();
        $_SESSION['email'] = $email; // Store email in session for authentication
        $_SESSION['userType'] = 'teacher'; // Store user type in session
        header('location:newt.php'); // Redirect to the teacher's home page
        exit();
      } else {
        $invalid = 1; // Non-teacher trying to login
      }
    } else {
      $invalid = 1; // Invalid credentials
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thinkfix Education - Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="logt.css"> <!-- Link to the external CSS -->
</head>
<body>
    <!-- Background Objects -->
    <img src="note.png" alt="Notebook" class="background-object" style="top: 10%; left: 5%; animation-delay: 0s;">
    <img src="pencil.png" alt="Pencil" class="background-object" style="top: 20%; left: 70%; animation-delay: 2s;">
    <img src="lap.png" alt="Book" class="background-object" style="top: 60%; left: 25%; animation-delay: 4s;">
    <img src="lap2.png" alt="Chalkboard" class="background-object" style="top: 45%; left: 85%; animation-delay: 6s;">
    
    <div class="container">
        <div class="login-card">
            <h2>Welcome Master!</h2>
            <form action="logt.php" method="POST">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Log In</button>
                  <div class="page-item"><a class="page-link" href="home.php">Back</a></div>
            </form>
            <div class="footer">
                <p>Don't have an account? <a href="sign.php">Sign up</a></p>
                <p><a href="#">Forgot password?</a></p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
