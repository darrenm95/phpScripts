<?php

echo " 
This is a string
that has been written
on multiple lines.";

echo "\n\n";

echo <<< _END
"This is another string
that has also been written
on multiple lines, BUT,
this time we have used
the 'here-document' operater i.e.<<<"
_END;

/* _END closing identifier must be written on a new line right at the beginning with nothing coming after it, only the
 semicolon, ';', followed by a newline character, not even a comment can be placed after the semicolon. If any of these
rules are broken, PHP will not detect the closing identifier and will continue to look for one. Once you have closed
a multiline block you are free to use the same tag name again. */

/* Also important to note that line-feed characters, e.g. \n, do not need to be added to start a new line, the return
key simply needs to be pressed. Any number of single quotes and double quotes can also be used without the need to
escape the characters with backslash. */