<?php
class Carros{
    public $cor;
    public $marca;
    public $modelo;

    //MÉTODOS
    public function acelerar(){
        echo "Velozes e Furiosos";
    }

    public function frear(){
        echo "Quase cometo uma infracao de transito, vou frear";
    }
}

//HERANÇA = EXTENDS
//POLIMORFISMO = PUBLIC, PROTECTED ou PRIVATE
//A classe CarroEletrico herda os atributos e métodos da classe Carros
class CarroEletrico extends Carros{
    public $autonomia;

    public function recarregar(){
        echo "Recarregando...";
    }
}

?>