<?php
    if(isset($_POST['email'])) {
        $data = $_POST['email'] . ";";
        $ret = file_put_contents('adress.txt', $data, FILE_APPEND | LOCK_EX);
        if($ret === false) {
            die('There was an error writing this file');
        }
        else {
            echo "<h1>Success!</h1><p>Thank you for subscribing to our newsletter!</p>";
        }
    }
    else {
        die('no post data to process');
    }
?>