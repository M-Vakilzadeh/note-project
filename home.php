<?
require_once('main.php');
$isGuest = !isset($_SESSION['email']);

if (!$isGuest){
    $user_id = $_SESSION['user_id'];
    $db = Db::getInstance();
    $records = $db->query("SELECT * FROM x_note WHERE user_id=$user_id");
  } else {
    $records = null;
  } 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="style.css">

    <title>homepage</title>
</head>
<body>
    <div id="header-wrapper">
        <div id="top-left-menu">
        <?
         if ($isGuest) { ?>
            <a href="home.php"><button class="btn">Home</button></a>
            <a href="sign-in.php"><button class="btn">sign-in</button></a>   
            <img src="img/profiles.jpg" class="profile-pic">
            <span>Welcome Guest</span>
            
            <? } else { ?>
            <a href="home.php"><button class="btn">Home</button></a>
            <a href="add-note.php"><button class="btn mt50">Add notes</button></a>
            <a href="sign-out.php"><button class="btn">sign-out</button></a>
            <img src="img/profiles.jpg" class="profile-pic">
            <span>Welcome <?=$_SESSION['fullname']?></span>
            <? } ?>
        </div>
    </div>
    <div class="div-home tac">
        <? if ($isGuest) {
            echo  "Sign in to access all of the features";
        } else { ?>

                <ul class="todo-entry">
                    <li>Titles</li>
                    <li>Descriptions</li>
                    <li>DateAndTimes</li>
                    <li>Isdone</li>
                    <li>Remove</li>
                    <li>Edit</li>
                </ul>
        <?  if ($records == null){$records = array(); }  
            foreach ($records as $record){
                if ($record['isDone']) {
                    $doneClass = "done";
                } else {
                    $doneClass = "pending";
              }    
                ?>
                
                <ul class="todo-entry <?=$doneClass?>">
                    <li><?=$record['title']?></li>
                    <li><?=$record['description']?></li>
                    <li><?=$record['eventTime']?></li>
                    <li><a href="done.php?id=<?=$record['note_id']?>"><button class="btn-check">Done</button></a></li>
                    <li><a href="delete.php?id=<?=$record['note_id']?>"><button class="btn-check">Del</button></a></li>
                    <li><a href="edit-note.php?id=<?=$record['note_id']?>"><button class="btn-check">edit</button></a></li>
                </ul>
        <?  } ?>

    <?  } ?> 
    </div>
</body>
</html>