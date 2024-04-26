<?php
session_start();
session_destroy();
session_unset();
echo "logout";
header("Location: index.php");
exit;
