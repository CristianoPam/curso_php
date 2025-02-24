<?php


class Pessoa {
    public $nome;  // Declaração de uma propriedade pública chamada $nome

    function falar(){
        echo "Olá Mundo!";  // Método falar que imprime "Olá Mundo!"
    }
}

$cristiano = new Pessoa(); // Cria uma instância da classe Pessoa

$cristiano->nome = "Cristiano"; // Atribui o valor "Cristiano" à propriedade $nome da instância $cristiano

echo $cristiano->nome; // Exibe o valor da propriedade $nome da instância $cristiano

echo "<br>";

echo $cristiano->falar();//informando o método.


echo "<br>";

class Animal {
    public $linguagem;

    function __construct($linguagem){
        $this->linguagem=$linguagem;
    }
    
        
    

    function Falar(){
        echo "Miau!";
    }
}

$animal = new Animal("Gato");

echo $animal->linguagem;

echo "<br>";

echo $animal->Falar();



