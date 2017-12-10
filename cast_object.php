<?php
$var = 5; 
$cast = (object) $var;
var_dump ($var, $cast);

$var = 5.5; 
$cast = (object) $var;
var_dump ($var, $cast);

$var = null; 
$cast = (object) $var;
var_dump ($var, $cast);

$var = false; 
$cast = (object) $var;
var_dump ($var, $cast);

$var = true; 
$cast = (object) $var;
var_dump ($var, $cast);

$var = 'php'; 
$cast = (object) $var;
var_dump ($var, $cast);

$var = '4php'; 
$cast = (object) $var;
var_dump ($var, $cast);
