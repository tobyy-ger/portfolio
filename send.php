<?php
if (!empty($_POST['name']) && !empty($_POST['surnm']) && !empty($_POST['email']) && !empty($_POST['msg'])) {

    $name = $_POST['name'];
    $surnm = $_POST['surnm'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];


    file_put_contents("messages.txt", "[\n$name\n$surnm\n$email\n$msg\n]\n", FILE_APPEND | LOCK_EX);

    echo "OK";
} else {
    echo "ERROR";
}
