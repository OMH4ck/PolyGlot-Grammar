<?php

class StreamWrapper {
    public $context;
    public function url_stat($path, $flags) {
        $path = str_replace('test://', 'file://', $path);
        if ($flags & STREAM_URL_STAT_QUIET) {
            return @stat($path);
        } else {
            return stat($path);
        }
    }
}

stream_wrapper_register('test', StreamWrapper::class);
set_include_path('test://foo:test://bar');

try {
    require_once 'doesnt_exist.php';
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

