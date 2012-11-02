<?php
  // This is a hack. You should connect to a database here.
  include("config.php");
  $username = $_POST["username"];
  $user_query = "SELECT * from users where username = '".$username."' and password = '".$_POST["password"]."'";
  $result = mysql_query($user_query);
  $row = mysql_fetch_assoc($result);
  

  if ($username != "" and $row["username"] == $username) {
    setcookie("username", $username);
    header("Location: search.php");
  } else {
    header("Location: index.php");
  }
?>