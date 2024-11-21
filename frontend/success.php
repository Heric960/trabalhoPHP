<?php
if (isset($_GET['msg'])) {
    echo "<h1>Sucesso!</h1>";
    echo "<p>" . htmlspecialchars($_GET['msg'], ENT_QUOTES, 'UTF-8') . "</p>";
}
?>