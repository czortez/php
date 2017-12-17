<?php
$strings = [' Navicat ', ' Category ', ' Catharsis '];
foreach ($strings as $string) {
echo mb_strpos($string, ' cat ');
echo mb_strlen($string);
echo str_replace(' cat ', ' dog ', $string);

} 