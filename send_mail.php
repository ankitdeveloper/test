<?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$to = "kupendra@simprosys.net";
$subject = "This is subject";

$message = "<b>This is HTML message.</b>";
$message .= "<h1>This is headline.</h1>";

$header = "From:ankit@mysterious-gorge-70744.herokuapp.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";
$header .= "X-Mailer: PHP/" . PHP_VERSION;

$retval = mail($to, $subject, $message, $header);

if ($retval == true) {
    echo "Message sent successfully...";
} else {
    echo "Message could not be sent...";
    print_r(error_get_last());
    echo "<br>DONE 1";
}
