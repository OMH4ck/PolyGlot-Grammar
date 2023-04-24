<?php
declare(strict_types=1);

namespace Foo;

// strlen() will be called with strict_types=0, so this is legal.
var_dump(call_user_func('strlen', false));

