<?php
header("access-control-allow-origin: *");
echo file_get_contents('http://api.coinsecure.in/v1/exchange/ticker');

?>