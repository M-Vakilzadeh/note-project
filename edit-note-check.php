<?
require_once('main.php');
$db = Db::getInstance();


$id = $_GET['$id'];

$newTitle = $_POST['newTitle'];
$newDescription = $_POST['newDescription'];
$newDateTime = $_POST['newDateTime'];

if (!isset($_SESSION['user_id'])){
    header("location: home.php");
}

$userId = $_SESSION['user_id'];



$db->modify("UPDATE `x_note` 
                SET `title` = '$newTitle',
                    `description` = '$newDescription',
                    `eventTime` = '$newDateTime' 
                WHERE `x_note`.`note_id` = 'id'");

header("location: home.php");

 
?>