<?php
session_start();
unset($_SESSION["nome"]);
session_destroy();
?>
<script> location.href='login.php'</script>