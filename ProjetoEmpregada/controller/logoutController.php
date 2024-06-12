<?php
session_start();
session_unset();
session_destroy();
header("Location: ../formLoginProfissional.php");
exit();
