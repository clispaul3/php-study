<?php
include './VerCode.php';
use vercode\VerCode as VerCode;
$type = $_GET['type'];
$number = $_GET['number'];
$width = $_GET['width'];
$height = $_GET['height'];
$code = new VerCode($number,$type,$width,$height);
$code->outImage();