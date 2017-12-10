<?php
$var = 5; 
$cast = (int) $var;
var_dump ($var, $cast);

$var = 5.5; 
$cast = (int) $var;
var_dump ($var, $cast);

$var = null; 
$cast = (int) $var;
var_dump ($var, $cast);

$var = false; 
$cast = (int) $var;
var_dump ($var, $cast);

$var = true; 
$cast = (int) $var;
var_dump ($var, $cast);

$var = 'php'; 
$cast = (int) $var;
var_dump ($var, $cast);

$var = '4php'; 
$cast = (int) $var;
var_dump ($var, $cast);

