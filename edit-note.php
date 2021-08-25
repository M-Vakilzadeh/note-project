<?
require_once('main.php');
$db = Db::getInstance();

$id = $_GET['id'];
$records = $db->first("SELECT * FROM x_note WHERE note_id=$id");

$title = $records["title"];
$description = $records["description"];
$date = $records["eventTime"];

?>
<html lang="en">
  <head>
    <title>edit-note</title>
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
      <input type="text" placeholder="title" name="newTitle" value="<?=$title?>">
      <br>
      <textarea type="text" placeholder="description" name="newDescription"><?=$description?></textarea>
      <br>
      <input type="datetime-local" placeholder="Date and Time" name="newDateTime" value="<? dateTimeConverter($date);?>">
      <br>
      <div class="mt20">
      <button class="btn w100" name="submit" type="submit">submit</button>
      <button type="reset" class="btn w100">reset</button>
      <br>
    </form>
  </div>
    <a href="home.php"><button class="btn w100">home</button></a>   

</div>

</body>
</html>

