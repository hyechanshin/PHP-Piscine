<?php
    if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] &&  $_POST['submit'] === "OK") {
        if (!file_exist('../private')) {
            mkdir('../private');
        }
        if (!file_exist('../private/passwd')) {
            file_put_contents('../private/passwd', null);+
        }
        $user_acc = unserialize(file_get_contents('../htdocs/private/passwd'));
        if ($user_acc) {
            $exist = 0;
            foreach ($user_acc as $k => $v) {
                if ($v['login'] === $_POST['login'])
                    $exist = 1;
            }
        }
        if ($exist) {
            echo "ERROR\n";
        } else {
            $tmp['login'] = $_POST['login'];
            $tmp['passwd'] = hash('whirlpool', $_POST['passwd']);
            $user_acc[] = $tmp;
			file_put_contents('../htdocs/private/passwd', serialize($user_acc));
			echo "OK\n";
        }
    } else {
        echo "ERROR\n";
    }
?>