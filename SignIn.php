<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="favicon1.ico" type="image/icon type">

  <link rel="stylesheet" href="stylelogin.css">
  <title>Killer Clues | SignIn</title>
</head>
<body>
  <form action="verify.php" method="POST">
  <div class="container">
   
    <div class="form signin">
      <h2>Sign In</h2>

      <div class="inputBox">
        <input type="text" required="required" name="username">
        <i class="fa-regular fa-user"></i>
        <span>Username</span>
      </div>

      <div class="inputBox">
        <input type="password" required="required" name="pswd">
        <i class="fa-solid fa-lock"></i>
        <span>Password</span>
      </div>

      <input type="checkbox" name="cb"> <span style="color:goldenrod;">Are you a admin ?</span>


      <div class="inputBox">
          <input type="submit" value="login">
      </div>

      <p>Not registered? <a href="SignUp.php" class=createacc> Create Account</a></p>

    
    </div>
  </div>
 
  </form>
</body>
</html>