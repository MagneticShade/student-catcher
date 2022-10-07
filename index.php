<?php

spl_autoload_register(function ($class) {
    require __DIR__ . implode(DIRECTORY_SEPARATOR, explode('\\', $class)) . '.php';
});
