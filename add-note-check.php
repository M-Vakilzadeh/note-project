<?
require_once ('main.php');

$title = $_POST['title'];
$description = $_POST['description'];
$dateTime = $_POST['dateTime'];



if (!isset($_SESSION['user_id'])){
    header("location: home.php");
}

$userId = $_SESSION['user_id'];

$db = Db::getInstance();

$db->insert("INSERT INTO x_note
(title, description, user_id, isDone, eventTime) VALUES 
('$title', '$description', '$userId', '0', '$dateTime')");

header("location: home.php");
 
?>