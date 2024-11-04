<?php

// incluindo composer
include_once('./vendor/autoload.php');

// url para gerar o qr-code
$url = 'https://www.instagram.com/marcos_renan4/';

// imprimir o titulo
echo "<h2>Código QR-Code gerado da URL: $url</h2>";

// gerando código qr atraves de instanciação da classe QRCode e enviando dados para o render gerar o codigo qr
$qrcode = (new \chillerlan\QRCode\QRCode())->render($url);

echo "<img src='$qrcode' alt='QR-Code' width='300px' height='300px'>";
