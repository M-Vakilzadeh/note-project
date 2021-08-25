<?
require_once ('main.php');

$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$name = $_POST['name'];
$nickname = $_POST['nickname'];
$time = getCurrentDateTime();

$db = Db::getInstance();
$record = $db->first("SELECT * FROM x_user WHERE email='$email'");

if ($record != null){
    $message = "You're already signed up with this email";
    require_once ('msg-failed.php');
    exit;
}
br();
if (strlen($password1)<=4 || strlen($password2)<=4){
    $message = "password is not strong enough";
    require_once ('msg-failed.php');
    exit;
}

if ($password1 != $password2){
    $message = "paswords not matched";
    require_once ('msg-failed.php');
    exit;
}

$db->insert("INSERT INTO x_user 
(email, fullname, nickname, password, registerTime, lastVisitTime) VALUES 
('$email', '$name', '$nickname', '$password1', '$time', '$time')");
    $message = "You are successfully signed up,please
    <a href='sign-in.php'><button class='btn'>sign in</button></a>";
    require_once "msg-success.php";
    exit;
?> 


