<?php
    unset($_SESSION['login_user']);
    unset($_SESSION['logged']);

    session_destroy();
?>