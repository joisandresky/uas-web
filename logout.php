<?php
session_start();

session_destroy();
?>

<script>
    window.open("login.php", "_self");
</script>