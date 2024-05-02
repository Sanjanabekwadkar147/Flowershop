<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    if ($action === 'display') {
        $result = display();
        echo $result;
    }
}

function display() {
    return 'Error: This is a customized error message.';
}

?> 

