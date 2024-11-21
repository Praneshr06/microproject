<?php
$logged = 0;
$invalid = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include 'server.php';
  $email = mysqli_real_escape_string($con, $_POST['email']); 
  $password = mysqli_real_escape_string($con, $_POST['password']);
  
  // Retrieve user details including user type
  $sql = "SELECT * FROM signup WHERE email='$email' AND password='$password'";
  $result = mysqli_query($con, $sql);
  if ($result) {
    $row = mysqli_fetch_assoc($result);
    if ($row) {
      if ($row['userType'] === 'student') {  // Check if user is a student
        $logged = 1;
        session_start();
        $_SESSION['email'] = $email; // Store email in session
        header('location:newhome.php');
        exit();
      } else {
        $invalid = 1; // Set an error for non-student access attempt
      }
    } else {
      $invalid = 1; // Invalid email or password
    }
  }
}
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="ima.png">
    <link rel="stylesheet" href="log.css">
    <title>Log In</title>
    <script>
        function formValidation()
        {
            let x =document.forms['form2']['email'].value;
            if(x== ""){
                alert("name must be filled out");
                return false;
            }
        }
        function newFunction()
        {
            document.getElementById("form2").reset();
        }
    </script>
</head>
<body>

    <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

   <div class="signin"> 
<form action="log.php" method="post" id="form2" name="form2" onsumit="return formValidation()">
    <div class="content"> 
   

     <h2>LOG IN</h2> 

     <div class="form"> 

      <div class="inputBox"> 

       <input type="email" name="email" required> <i>email</i> 

      </div> 

      <div class="inputBox"> 

       <input type="password" name="password" required> <i>Password</i> 

      </div> 

      <div class="links"> <a href="#">Forgot Password</a> <a href="sign.php">Signup</a> 

      </div> 

      <div class="inputBox"> 

       <input type="submit" value="Login"> 

      </div> 
      <div class="page-item"><a class="page-link" href="home.php">Back</a></div>
      <?php
    if ($invalid) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong style="color: red;">Error</strong> <div style="color: blue;">Invalid Credentials or unauthorized access</div>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}

    if ($logged) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Congrats</strong> You are successfully Logged In.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
      }
 ?>

     </div> 

    </div> 

   </div> 

  </section> <!-- partial --> 

 </body>

</html>