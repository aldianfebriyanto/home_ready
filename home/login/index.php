<?php
session_start();
session_unset();
echo "<script>window.location.assign('../login/login.php')</script>";
session_destroy();
session_write_close();
?> 