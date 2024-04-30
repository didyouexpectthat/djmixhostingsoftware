<?php

function loadLocale($lang = 'en_US') {
    $file = __DIR__ . '/../locale/' . $lang . '/messages.php';
    if (file_exists($file)) {
        return require $file;
    } else {
        // Fallback to English if the specified language file does not exist
        return  require __DIR__ . '/../locale/en_US/messages.php';
    }
}
