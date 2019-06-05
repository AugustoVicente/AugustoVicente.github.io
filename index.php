<?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $details = json_decode(file_get_contents("http://ipinfo.io/json"));
    if($details->country == "BR")
    {
        header("Location: ./pt-br/");
    }
    else
    {
        header("Location: ./en-us/");
    }
?>