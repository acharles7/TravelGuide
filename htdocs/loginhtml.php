
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Login page</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="Charles">
  <link rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="login.css"/>
</head>

<body>
  <script src="js/scripts.js"></script>


    <div id="maindiv">
      <div id="navbar">
        <a href="index.html" class="logo">Kiwi Corp </a>
        <ul>

          <li><a href="index.html">Home</a></li>
          <li><a href="hotels.html">Hotels</a></li>
          <li><a href="#">Deals</a></li>
          <li><a href="#">Service</a></li>
          <li><a href="#">About</a></li>
          <li><a href="login.html">Login</a></li>
        </ul>
      </div>

      <div class="login-page">
        <div class="form1" >
          <label>Login Form</label>
          <div class="input1">
            <form class="login-form" method="post" action="ulogin.php" >

            <input type="text" name="username"placeholder="Username"/></input>
            <input type="password" name="password" placeholder="Password"/></input>

            <button type="submit" name="submit">login</button>
            <label>
              <?php

                 echo ($msg !== null)?'<p>ERROR: ' . $msg . '</p>':null; 
              ?>
            </label>

            </form>
          </div>
        </div>


        <div class="form2">
          <label>Register Yourself</label>
          <div class="input1">
          <form class="register-form" method="post" action="register.php">

            <input type="text" name="username1" placeholder="Username"/>
            <input type="text" name="email" placeholder="Email-Id "/>
            <input type="password" name="password1" placeholder="Password"/>
            <input type="password" name="password2" placeholder="Confirm Password"/>
            <input type="text" name="mobile" placeholder="mobile"/>
            <label>



            </label>

            <button type="submit" name="submit1">create</button>

          </form>

        </div>
        </div>
      </div>


    </div>
  </body>
  </html>
