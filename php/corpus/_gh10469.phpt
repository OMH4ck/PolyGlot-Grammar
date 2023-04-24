<?php
ini_set('open_basedir', __DIR__);

$originalDir = __DIR__;
$tmpDir = $originalDir . '/gh10469_tmp';
@mkdir($tmpDir, 0777, true);
chdir($tmpDir);
ini_set('open_basedir', ini_get('open_basedir') . ':./..');
ini_set('open_basedir', ini_get('open_basedir') . ':./../');
ini_set('open_basedir', ini_get('open_basedir') . ':/a/');

chdir($originalDir);
var_dump(ini_get('open_basedir'));
