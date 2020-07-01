<?php

/* erroneousString = 'Here's a string that causes an error'
If you try to enter the string above, you will encounter an error. This is because of the apostrophe in "here's" which
is interpreted by PHP as the end of the string so PHP decides that the remaining text after the apostrophe shouldn't be
there. Special characters such as the apostrophe need to be escaped with backslash '\' to be used in a literal string
( a string written between single quotes, i.e. apostrophes ). Beware though when using string literals, only the
apostrophe and backslash itself can be escaped in string literal's to be used in this way.
*/

$correctString = 'Here\'s the correct string.' . "\n";
$backslashString = 'Here\'s a string with a backslash: \\.' . "\n";

$notEscapedCharacters = 'Here\'s some characters that cannot be escaped when in between single quotes: \n\t.';

echo $correctString;
echo $backslashString;
echo $notEscapedCharacters;
