
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>

    <!-- Icon -->

    <!-- Login Form -->
    <form method="POST" action="user.php">
      <input type="text" id="login" class="fadeIn second" name="user" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="pass" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
  </body>
</html>
<?php
$multi = array (
    array(
      "username" => "Lara",
      "Password" => "Lara123456789",
      "rool" => "Admin"
    ),
    array(
        "username" => "Hussam",
        "Password" => "hussam123456789",
        "rool" => "user"
      ),
      array(
        "username" => "Alashram",
        "Password" => "moh123456789",
        "rool" => "user"
      ),
      array(
        "username" => "Dana",
        "Password" => "dana123456789",
        "rool" => "user"
      ),
      array(
        "username" => "shuroq",
        "Password" => "sho123456789",
        "rool" => "user"
      ),
      array(
        "username" => "Shatha",
        "Password" => "shosho123456789",
        "rool" => "user"
      ));
      foreach($multi as $user){
          if ($user == $user  && $password == $password){
              echo "Welcom user ";
              header("Location: test.php");
          break;}
          elseif ($user !== $user  && $password !== $password){
            echo "This is not user ";
          }
          }
      echo "<pre>";


