<?php
header('Content-Type: text/html');

// Here you would normally use your configuration or database to retrieve the server meta information


$ip_address = $_SERVER['REMOTE_ADDR'];

// Meta verilerini dosyadan al
$data_file = 'meta_data.json';
$meta_data = [];

if (file_exists($data_file)) {
    $meta_data = json_decode(file_get_contents($data_file), true);
}

if (isset($meta_data[$ip_address])) {
echo "server|213.179.209.168\n";
echo "port|17179\n";
echo "loginurl|login.growtopiagame.com\n";
echo "\n";
echo "type|1\n";
echo "#maint|Under maintenance.\n";
echo "beta_server|213.179.209.168\n";
echo "beta_port|1945\n";
echo "beta_type|1\n";
echo "RTENDMARKERBS1001\n";
echo "meta|" . htmlspecialchars($meta_data[$ip_address]);
} else {
echo "server|213.179.209.168\n";
echo "port|17179\n";
echo "loginurl|login.growtopiagame.com\n";
echo "\n";
echo "type|1\n";
echo "#maint|Under maintenance.\n";
echo "beta_server|213.179.209.168\n";
echo "beta_port|1945\n";
echo "beta_type|1\n";
echo "RTENDMARKERBS1001\n";
echo "meta|NULL";
}

?>
