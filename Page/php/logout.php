<?php
    SESSION_START();
    SESSION_UNSET();
    SESSION_DESTROY();
    echo '<script>window.location="../login.php";</script>';
    exit();
?>