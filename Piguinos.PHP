<?php
    $ip = $_SERVER['REMOTE_ADDR'];
?>
<?php
    $file = 'ips.txt';
    $current = file_get_contents($file);
    $current .= $ip . "\n";
    file_put_contents($file, $current);
?>
