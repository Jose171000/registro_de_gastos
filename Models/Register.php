<?php
// $entrada = $_POST["entrada"];
// $titulo = $_POST["titulo"];
// $description = $_POST["description"];
// $cantidad = $_POST["cantidad"];
class Register {
    public function __construct(
        public $name,
        public $titulo,
        public $description,
        public $entrada,
        public $cantidad
    ){}
    public function buildString (){
        return "El señor ".$this->name." realizó un gasto de ".$this->cantidad . " para comprar ". $this->titulo. " argumentando que '{$this->description}' ". ". Por otro lado, este señor cuenta con un ingreso mensual de s/{$this->entrada}.";
    }

    public function writeText (){
        $file = fopen("Models/dataText.txt","a"); //aquí pusimos la 'a' ya que es de 'add', para agregar y no simplemente escribir con 'w'
        fwrite($file, $this->buildString() . "\n");
        fclose($file);
    }
}