<?php

function isMobileDevice()
{
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    $mobileKeywords = [
        'android', 'iphone', 'ipod', 'ipad', 'blackberry', 'windows phone'
    ];

    foreach ($mobileKeywords as $keyword) {
        if (stripos($userAgent, $keyword) !== false) {
            return true;
        }
    }

    return false;
}

if (isMobileDevice()) {
    header("Location:MobileView.php");
    exit;
} else {
    header("Location:WebView.php");
    exit;
}

?>