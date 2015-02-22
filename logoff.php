<?php

require 'classes/setup.php';

$lib = new DRY__METHODS();
$lib::is_session('start');

session_destroy();

header("Location:index.php");




?>
