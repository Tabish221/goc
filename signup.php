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
            <h6>Registration</h6>

            <div class="notes">
               <i class="far fa-info-circle"></i>
               <p>Enter the verification code that was sent to your email address, then click “VALIDATE CODE”.</p>
            </div>

            <div class="signInForm">
               <form>
                  <h5>Please provide the <br> following information:</h5>

                  <div class="signIn-feild">
                     <label for="userName">Email Address</label>
                     <input type="email">
                     <span class="error" style="display:none">You must enter a valid email address. (name@domain.XX).</span>
                  </div>

                  <div class="signIn-feild">
                     <label for="userName">Verification code</label>
                     <input type="text">
                     <span class="error" style="display:none">You must enter a valid Verification code.</span>
                  </div>

                  <div class="signUp-verificationBtn signUp-groupBtn mb-3 d-flex flex-column gap-3">
                    <div style="display:none">
                        <div class="d-flex align-items-center gap-3">
                            <button class="btn btn-success w-100">Validate code</button>
                            <button class="btn btn-primary w-100 text-nowrap">Request a new code</button>
                        </div>
                    </div>
                    <div style="display:block">
                        <div class="">
                            <button class="btn btn-primary w-100">Request a verification code</button>
                        </div>
                    </div>
                  </div>

                  <div class="signIn-feild">
                     <label for="userName">Password</label>
                     <input type="password">
                     <span class="error" style="display:none">You must enter your password.</span>
                  </div>

                  <div class="signIn-feild">
                     <label for="userName">Confirm password</label>
                     <input type="password">
                     <span class="error" style="display:none">Password and Confirm password must be same.</span>
                  </div>

                  <div class="signUp-groupBtn d-flex align-items-center gap-3">
                     <button class="btn btn-primary w-100">Register</button>
                     <a href="signin.php" class="btn btn-secondary w-100">Cancel</a>
                  </div>
               </form>
            </div>
         </div>
      </section>
      
      <?php include("includes/scripts.php"); ?>
   </body>
</html>