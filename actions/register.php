<?php

require_once "../classes/User.php";

//Create an object
$user = new User; // User.phpにあるclass User(設計図)を元に実際にそれを使うためのコード

// call the register method
$user->store($_POST);
?>