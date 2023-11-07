<?php
require("functions.php");
require("Models/Register.php");
$allData = "hello world";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST["name"];
    $entrada = $_POST["entrada"];
    $titulo = $_POST["titulo"];
    $description = $_POST["description"];
    $cantidad = $_POST["cantidad"];
    
    $allData = registrator($name, $titulo, $entrada, $description, $cantidad);
}
require("index.view.php");