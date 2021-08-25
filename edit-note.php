<?
require_once('main.php');
$db = Db::getInstance();

$id = $_GET['id'];
$records = $db->first("SELECT * FROM x_note WHERE note_id=$id");

$oldTitle = $records["title"];
$oldDescription = $records["description"];
$oldDate = $records["eventTime"];

?>
<html lang="en">
  <head >
    <title>edit-note</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="base.css">
</head>
<body>
  <div>
  <div class="tac">
    <img src="img/notepad.png" alt="notes" width="270px">
    <br><br>

    <form action="edit-note-check.php?id=<?= $id?>" method="post">
      <input type="text" placeholder="title" name="newTitle" value="<?=$oldTitle?>">
      <br>
      <textarea type="text" placeholder="description" name="newDescription"><?=$oldDescription?></textarea>
      <br>
      <input type="datetime-local" placeholder="Date and Time" name="newDateTime" value="<? dateTimeConverter($oldDate);?>">
      <br>
      <input type="hidden" value="<?=$id?>" name="id">
      <div class="mt20">
      <button class="btn w100" name="submit" type="submit">submit</button>
      <button type="reset" class="btn w100">reset</button>
      <br>
    </form>
  </div>
    <a href="home.php"><button class="btn w100 mb50">home</button></a>

</div>

</body>
</html>

