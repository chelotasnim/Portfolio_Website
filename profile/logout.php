<?php
session_start();
$_SESSION["imIn"] = false;
session_unset();
session_destroy();

header("Location: ../");