<?php
    if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] && $_POST['submit'] === "OK") {
        $user_acc = unserialize(file_get_contents('../private/passwd'));
        if ($user_acc) {
            $exist = 0;
            foreach ($user_acc as $k => $v) {
                if ($v['login'] === $_POST['login'] && $v['passwd'] === hash('whirlpool', $_POST['oldpw'])) {
                    $exist = 1;
                    $user_acc[$k]['passwd'] =  hash('whirlpool', $_POST['newpw']);
                }
            }
            if ($exist) {
                file_put_contents('../private/passwd', serialize($user_acc));
                echo "OK\n";
            } else {
                echo "ERROR\n";
            }
        } else {
            echo "ERROR\n";
        }
    } else {
        echo "ERROR\n";
    }
?>