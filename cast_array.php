<?php
$var = 5; 
$cast = (array) $var;
var_dump ($var, $cast);

$var = 5.5; 
$cast = (array) $var;
var_dump ($var, $cast);

$var = null; 
$cast = (array) $var;
var_dump ($var, $cast);

$var = false; 
$cast = (array) $var;
var_dump ($var, $cast);

$var = true; 
$cast = (array) $var;
var_dump ($var, $cast);

$var = 'php'; 
$cast = (array) $var;
var_dump ($var, $cast);

$var = '4php'; 
$cast = (array) $var;
var_dump ($var, $cast);
