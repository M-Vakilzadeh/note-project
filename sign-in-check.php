<?
require_once ('main.php');

$email = $_POST['email'];
$password = $_POST['password'];
$db = Db::getInstance();

$record = $db->query("SELECT * FROM x_user WHERE email='$email'");
if ($record == null){
    $message = ("The email does not exist.");
    require_once ('msg-failed.php');
    exit;
    } else {
    if ($password == $record[0]['password']){
    $_SESSION['email'] = $record[0]['email'];
    $_SESSION['user_id'] = $record[0]['user_id'];
    $_SESSION['fullname'] = $record[0]['fullname'];
           


    $message = "congratulation, You are signed in.<a href='home.php'><button class='btn'>Go to homepage</button></a>";
    require_once "msg-success.php";
    exit;
    } else {
    $message = "sign in in in failed, Check your email and password.";
    require_once ('msg-failed.php');
    exit;
    
    }
}
?> 