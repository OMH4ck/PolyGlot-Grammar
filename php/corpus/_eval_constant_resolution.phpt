<?php
namespace foo {
define('foo\true', 'test');
echo "In eval\n";
eval('namespace foo { var_dump(true); var_dump(TrUe); var_dump(namespace\true); var_dump(\true); }');
echo "Outside eval\n";
var_dump(true); var_dump(TrUe); var_dump(namespace\true); var_dump(\true);
}
