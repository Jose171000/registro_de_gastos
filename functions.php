<?php
function registrator ($name, $titulo, $entrada, $description, $cantidad ){
  $resgister = new Register($name, $titulo, $description,  $entrada, $cantidad);
  $resgister->writeText();
  return $resgister->buildString();
};