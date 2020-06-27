<?php
     if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] &&  $_POST['submit'] === "OK" && file_exist('../private/passwd')) {
        $user_acc = unserialize(file_get_contents('../private/passwd'));
        if ($user_acc) {
            $exist = 0;
            foreach ($user_acc as $k => $v) {
                if ($v['login'] === $_POST['login'] && $v['passwd'] === hash('whirlpool', $_POST['oldpw'])) { 
                    $exist = 1;
                    $account[$k]['passwd'] =  hash('whirlpool', $_POST['newpw']);
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