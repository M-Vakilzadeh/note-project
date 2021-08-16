<? 
require_once ('main.php');
$id = $_GET['id'];

if (!isset($_SESSION['user_id'])){
    header("location: home.php");

}
$userId = $_SESSION['user_id'];


$db = Db::getInstance();
$db->modify("DELETE FROM x_note WHERE note_id=$id AND user_id=$userId");

    header("location: home.php");
