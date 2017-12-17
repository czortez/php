<?php
$countries = [' Russia ',' Italy ', ' Egypt ',' Norway '];
$serializedCountries = serialize($countries);
var_export(unserialize($serializedCountries));