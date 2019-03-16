<?php
session_start();
if (!$_SESSION) {
    header("Location: success.php");
}
?>
success!