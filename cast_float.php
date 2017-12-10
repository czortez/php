<?php
$var = 5; 
$cast = (float) $var;
var_dump ($var, $cast);

$var = 5.5; 
$cast = (float) $var;
var_dump ($var, $cast);

$var = null; 
$cast = (float) $var;
var_dump ($var, $cast);

$var = false; 
$cast = (float) $var;
var_dump ($var, $cast);

$var = true; 
$cast = (float) $var;
var_dump ($var, $cast);

$var = 'php'; 
$cast = (float) $var;
var_dump ($var, $cast);

$var = '4php'; 
$cast = (float) $var;
var_dump ($var, $cast);
