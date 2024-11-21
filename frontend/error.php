<?php
if (isset($_GET['msg'])) {
    echo "<h1>Erro!</h1>";
    echo "<p>" . htmlspecialchars($_GET['msg'], ENT_QUOTES, 'UTF-8') . "</p>";
}
?>
