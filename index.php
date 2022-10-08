<?php

spl_autoload_register(function ($class) {
    require __DIR__ . DIRECTORY_SEPRATOR . implode(
        DIRECTORY_SEPARATOR,
        explode('\\', str_replace('College', '', $class))
    ) . '.php';
});
