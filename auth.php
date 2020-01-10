<?php define("TOKEN", "98546hnv3o496cdx58354");

if($_POST["token"] != TOKEN){
  die("authentication failed");
}
