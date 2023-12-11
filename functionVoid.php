<?php
// Fungsi Void
function salam($nama = "") {
    echo "<h2>Assalamu'alaikum " . strtoupper($nama) . "</h2>";
}

salam("ali");
salam("fadil");
salam(); // This will use an empty string as the default value
?>
