<?php
$oldcwd = getcwd();
chdir(__DIR__);
if (substr(PHP_OS, 0, 3) == 'WIN') {
    set_include_path(__DIR__.'/bug39542;.');
} else {
    set_include_path(__DIR__.'/bug39542:.');
}

spl_autoload_register(function ($class) {
    if (!require_once($class.'.inc')) {
        error_log('Error: Autoload class: '.$class.' not found!');
    }
});

new bug39542();

chdir($oldcwd);
