<?php
$var = 5; 
$cast = (bool) $var;
var_dump ($var, $cast);

$var = 5.5; 
$cast = (bool) $var;
var_dump ($var, $cast);

$var = null; 
$cast = (bool) $var;
var_dump ($var, $cast);

$var = false; 
$cast = (bool) $var;
var_dump ($var, $cast);

$var = true; 
$cast = (bool) $var;
var_dump ($var, $cast);

$var = 'php'; 
$cast = (bool) $var;
var_dump ($var, $cast);

$var = '4php'; 
$cast = (bool) $var;
var_dump ($var, $cast);
