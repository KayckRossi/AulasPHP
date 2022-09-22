<?php

class Pessoa 
{
    var $codigo;
    var $nome;
    var $idade;
    var $altura;
    var $nascimento;
    var $escolaridade;
    var $salaraio;
    var $x;

    //aumenta a altura em centimentros
    function crescer ($centimentros)
    {
        if  ($centimentros > 0) {
            $this->altura += $centimentros;
        }
    }
    //altera a escolaridade para a titulação
    function formar ($titulacao) {
        $this->escolaridade = $titulacao;
    }
    //aumenta a idade em anos
    function envelhecer ($anos) {
        if ($anos > 0) {
            $this->idade += $anos;
        }
    }

//método construtor inicializa propriedades

function __construct($c, $n, $altura, $idade, $nascimento, $escolaridade, $salario, $x){
    $this->codigo = $c;
    $this->nome = $n;
    $this->idade = $idade;
    $this->altura = $altura;
    $this->nascimento = $nascimento;
    $this->escolaridade = $escolaridade;
    $this->salario = $salario;
    $this->x = $x;

    }

    //método destrutor finaliza objeto
    
    function __destruct(){

        echo"<br>Objeto {$this->nome} finalizado ... <br>";
    }
}

?>
