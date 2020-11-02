<?php
require_once "../Action/Config.php";

$db = new PDO("mysql:host=" . config::SERVEUR . ";dbname=" . config::BASE, config::USER, config::MDP);
if(isset($_POST["id"]))
{
 $query = "UPDATE events SET title=:title, start_event=:start_event, end_event=:end_event WHERE id=:id";
 $statement = $db->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end'],
   ':id'   => $_POST['id']
  )
 );
}

?>
?>