<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    >
  </script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="login.php" class="sign-in-form" method="POST">
            
              <h2 class="title">Sign in</h2>
            
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Username" required/>
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="pass" placeholder="Password" required/>
              </div>
              <input type="submit" name="login-btn" value="Login" class="btn solid" />
              <p class="social-text">Or Sign in with social platforms</p>
              <div class="social-media">
                <a href="#" class="social-icon">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
          
          </form>
          <form action="signup.php" class="sign-up-form" method="POST" >
            
              <h2 class="title">Sign up</h2>
            
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="user-name" placeholder="Username" required/>
              </div>
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" name="user-email" placeholder="Email" required/>
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="user-pass" placeholder="Password" required/>
              </div>
              <input type="submit" name="signup-btn" class="btn" value="Signup">
              <div>
                
              </div>
              <p class="social-text">Or Sign up with social platforms</p>
              
              <div class="social-media">
                <a href="#" class="social-icon">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </form>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Welcome to our Community ! <br>
            If you don't have an account! Click on the Sign up Button.. 
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
            Welcome back!</br>
            Already have an Account just click on the Sign In Button..
           
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="signup.php"></script>
    <script src="app.js"></script>
  </body>
</html>


