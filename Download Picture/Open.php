<?php

$filename = __DIR__ . 'image';

$info   = getimagesize($filename);
$width  = $info[0];
$height = $info[1];
$type   = $info[2];

switch ($type) {
    case 1:
        $img = imageCreateFromGif($filename);
        imageSaveAlpha($img, true);
        break;
    case 2:
        $img = imageCreateFromJpeg($filename);
        break;
    case 3:
        $img = imageCreateFromPng($filename);
        imageSaveAlpha($img, true);
        break;
}