<?php
$source=getenv('POPCLIP_TEXT');

echo preg_replace('/^/um', '> ', $source);

?>