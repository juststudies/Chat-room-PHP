<?php

use ChatApp\Websocket\WebSocket;

require_once('./Websocket.php');

echo "Servidor subiu!";
$ws = new WebSocket("127.0.0.1", "8080");
