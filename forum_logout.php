<?php

session_start();

session_unset();

session_destroy();

header("location: forum_first.php");
exit;
?>