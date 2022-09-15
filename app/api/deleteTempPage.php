<?php
$file = "../../ergjergerigi24914812_32853285.html";

if (file_exists($file)) {
    unlink($file);
} else {
    header("HTTP/1.0 400 Bad Request");
}