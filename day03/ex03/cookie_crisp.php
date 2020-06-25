<?php
    $tab = $_GET;
    if ($tab["action"]) {
        if ($tab["action"] === "set")
            setcookie($tab["name"], $tab["value"], time() + (86400 * 30), '/'); // 86400 = 1 day
        else if ($tab["action"] === 'get')
            echo $_COOKIE[$_GET["name"]] . "\n";
        else if ($tab["action"] === "del")
            setcookie($_GET["name"], "", time() - 3600);
    }
?>