<?php
$big = [
    'small' => [
        'key' => 'value',
    ],
];
echo $big['small']['key'];
unset($big['small']['key']);
var_export($big);