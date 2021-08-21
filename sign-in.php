<?
require_once('main.php');

if (isset($_SESSION['email'])){
  $message = "you are already signed in" . "<br>" .
  '<a href="home.php"><button class="btn">Go to homepage</button></a><br> OR <br><a href="sign-out.php"><button class="btn">sign-out</button></a>';
  require_once ('msg-success.php');
  exit;
}

?>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="base.css">
</head>
<body>
  <div>
  <div class="tac">
    <img src="img/notepad-pngrepo-com.png" alt="notes" width="300px">
    <br><br>

    <form id="submit" action="sign-in-check.php" method="post">
      <input type="text" placeholder="Email" name="email">
      <br>
      <input type="password" placeholder="Password" name="password">
      <br>
      <div style="margin-top: 20px;">
      <button id="submit" class="btn w100">sign-in</button>
      <br>
    </form>
  </div>
    <div class=haveAccount>don't have an account?</div>
    <a href="sign-up.php"><button class="btn w100">sign-up</button></a>
    <a href="home.php"><button class="btn w100">home</button></a>   

</div>

</body>
</html>