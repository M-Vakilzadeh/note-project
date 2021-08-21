<?
require_once('main.php');
$db = Db::getInstance();

$id = $_GET['id'];

$records = $db->query("SELECT * FROM x_note WHERE note_id=$id");

$oldTitle = $records[0]["title"];
$oldDescription = $records[0]["description"];
$oldDate = $records[0]["eventTime"];
$date = date_format(new DateTime($oldDate), "c");

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

    <form action="edit-note-check.php" method="post">
      <input type="text" placeholder="title" name="newTitle" value="<?=$oldTitle?>">
      <br>
      <textarea type="text" placeholder="description" name="newDescription"><?=$oldDescription?></textarea>
      <br>
      <input type="datetime-local" placeholder="Date and Time" name="newDateTime" value="<?=$date?>">
      <input type="text" placeholder="Date and Time" name="newDateTime" value="<?=$date?>">
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

