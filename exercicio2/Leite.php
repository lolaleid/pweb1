<?php

require_once "Produto.php";
require_once "Perecivel.php";

class Leite extends Produto implements Perecivel{
	private $marca;
	private $volume;
	private $dataValidade;

	public function __construct($codigo, $preco, $marca, $volume, $dataValidade){
        
        $key = array_search("", ["codigo" => $codigo,"preco" => $preco,"marca" => $marca, "volume" => $volume,"data" => $dataValidade]);
        if($key){
            throw new Exception("InformaçãoNulaException: O atributo {$key} está vazio!");
        }

        $this->codigo = $codigo;
        $this->preco = $preco;
        $this->marca = $marca;
        $this->volume = $volume;
        $this->dataValidade = $dataValidade;
    }


	public function getMarca(){
		return $this->marca;
	}	

	public function getVolume(){
		return $this->volume;
	}

	public function getDataValidade(){
		return $this->dataValidade;
	}

	public function estaVencido(){
        return (strtotime(date("Y-m-d")) > strtotime($this->dataValidade));
    }


}
?>