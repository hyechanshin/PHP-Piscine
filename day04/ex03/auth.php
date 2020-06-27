<?php
function auth($login, $passwd) {
    if (!$login || !$passwd)
        return false;
    $user_acc = unserialize(file_get_contents('../private/passwd'));
    if ($user_acc) {
        foreach ($user_acc as $k => $user) {
            if ($user['login'] === $login && $user['passwd'] === hash('whirlpool', $passwd)) {
                return true;
            }
        }
    }
    return false;
}
?>