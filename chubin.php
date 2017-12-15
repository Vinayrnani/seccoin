<?php

$site_contents=file_get_contents('https://www.coinhubindia.com');
echo substr($site_contents,strpos($site_contents,'<rate'),strpos($site_contents,'</rate'));

?>