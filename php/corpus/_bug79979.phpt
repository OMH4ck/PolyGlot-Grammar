<?php

namespace Foo;

call_user_func_array("str_replace", ["a", "b", "c", new \stdClass]);
call_user_func_array("str_replace", ["a", "b", "c", "count" => new \stdClass]);

\call_user_func_array("str_replace", ["a", "b", "c", new \stdClass]);
\call_user_func_array("str_replace", ["a", "b", "c", "count" => new \stdClass]);

