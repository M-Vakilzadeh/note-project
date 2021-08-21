<?
require_once('main.php');


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

    <form action="add-note-check.php" method="post">
      <input type="text" placeholder="title" name="title">
      <br>
      <textarea type="text" placeholder="description" name="description"></textarea>
      <br>
      <input type="datetime-local" placeholder="Date and Time" name="dateTime">
      <br>
      <div style="margin-top: 20px;">
      <button class="btn w100" name="submit" type="submit">submit</button>
      <button type="reset" class="btn w100">reset</button>
      <br>
    </form>
  </div>
    <a href="home.php"><button class="btn w100">home</button></a>   

</div>

</body>
</html>

