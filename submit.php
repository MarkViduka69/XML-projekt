<?php
    $xml = simplexml_load_file('newsletter.xml');

    $message = $xml->poruka;

    echo $message;
?>