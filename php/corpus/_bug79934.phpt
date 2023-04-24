<?php
// lines with only CRLF should not cause a parse error
eval("\$s1 = <<<HEREDOC\r\n    a\r\n\r\n    b\r\n    HEREDOC;");
var_dump(addcslashes($s1, "\r\n"));

// lines with only a LF should not cause a parse error
eval("\$s2 = <<<HEREDOC\n    a\n\n    b\n    HEREDOC;");
var_dump(addcslashes($s2, "\n"));

// lines with only a CR should not cause a parse error
eval("\$s3 = <<<HEREDOC\r    a\r\r    b\r    HEREDOC;");
var_dump(addcslashes($s3, "\r"));

// lines with only whitespace should not cause a parse error
eval("\$s4 = <<<HEREDOC\r    a\r\n  \r\n    b\r    HEREDOC;");
var_dump(addcslashes($s4, "\n\r"));

