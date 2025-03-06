<?php
$filename = __DIR__ . "/resources/webpage.html";

if (file_exists($filename)) {
    readfile($filename);
} else {
    echo "File not found!";
}
?>
