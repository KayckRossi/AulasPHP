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
}
?>
