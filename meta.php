<?php
// meta.php

// IP adresini ve meta bilgisini al
$ip_address = $_SERVER['REMOTE_ADDR'];
$meta = $_POST['meta'] ?? '';

// Eğer meta bilgisi gelmişse kaydet
if ($meta) {
    // meta verilerini bir dosyaya kaydedelim
    $data_file = 'meta_data.json';
    $current_data = [];

    if (file_exists($data_file)) {
        $current_data = json_decode(file_get_contents($data_file), true);
    }

    // IP adresine göre meta verisini kaydet
    $current_data[$ip_address] = $meta;

    // Dosyaya geri yaz
    file_put_contents($data_file, json_encode($current_data));

    echo "Meta verisi kaydedildi.";
} else {
    echo "Meta verisi gönderilmedi.";
}
?>
