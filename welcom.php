<h1>Welcom!</h1>
<?php
session_start();
echo $_POST['email'];
echo "<br>";
echo $_POST['password'];
echo "<br>";
echo "MY Favourit color " .$_SESSION['favcolor'] ;
echo "<br>";
echo "MY Favourit animal " .$_SESSION['favanimal'];
?>