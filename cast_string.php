<?php
$var = 5; 
$cast = (string) $var;
var_dump ($var, $cast);

$var = 5.5; 
$cast = (string) $var;
var_dump ($var, $cast);

$var = null; 
$cast = (string) $var;
var_dump ($var, $cast);

$var = false; 
$cast = (string) $var;
var_dump ($var, $cast);

$var = true; 
$cast = (string) $var;
var_dump ($var, $cast);

$var = 'php'; 
$cast = (string) $var;
var_dump ($var, $cast);

$var = '4php'; 
$cast = (string) $var;
var_dump ($var, $cast);
