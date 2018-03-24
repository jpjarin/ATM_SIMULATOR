<?php
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}

$sql = "SELECT * FROM users WHERE username = :username " ;

$q = $pdo->prepare($sql);
$q->execute([':username'=>$_SESSION['username']]);
$q->setFetchMode(PDO::FETCH_ASSOC);
$row = $q->fetch();
?>
