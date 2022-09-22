<?php 
    class contaCorrente extends Conta {
        var $limite;

        //Método construtor (sobrescrito) agora, também inicializa a variável $limite
        function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $limite){
            parent::__construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo);
            $this->limite= $limite;

        }
    }
    {
        
    }