<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Goverment of Canada</title>
      <?php include("includes/style.php"); ?>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   </head>
   <body>
      <?php include("includes/header.php") ?>

      <section class="signInSection">
         <div class="container">
            <h6>Login</h6>

            <div class="notes">
               <i class="far fa-info-circle"></i>
               <p>If you have an Arrima or Learn French account , you must use your username to log in.</p>
            </div>

            <div class="signInForm">
               <form>
                  <h5>Please provide the <br> following information:</h5>

                  <div class="signIn-feild">
                     <label for="userName">Email Address</label>
                     <input type="email">
                     <span class="error" style="display:none">You must enter your email address.</span>
                  </div>

                  <div class="signIn-feild">
                     <label for="userName">Password</label>
                     <input type="password">
                     <span class="error" style="display:none">You must enter your password.</span>
                  </div>

                  <div class="signIn-forget">
                     <a href="#">Forgot your password?</a>
                  </div>

                  <div class="signInBtn">
                     <button>To Log In</button>
                  </div>

                  <div class="divider"></div>

                  <div class="createAccount">
                     <p>You do not have an account? <a href="signup.php">CREATE AN ACCOUNT</a></p>
                  </div>
               </form>
            </div>
         </div>
      </section>
      
      <?php include("includes/scripts.php"); ?>
   </body>
</html>