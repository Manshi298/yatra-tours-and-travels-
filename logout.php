<?php

    session_destroy();
    unset($_SESSION['uid']);
    header('location:index.php');


?>