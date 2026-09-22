<?php

var_dump(
    PHP_VERSION,
    PHP_SAPI,
    php_ini_loaded_file(),
    extension_loaded('xdebug'),
    ini_get('xdebug.mode'),
    ini_get('xdebug.start_with_request'),
);
