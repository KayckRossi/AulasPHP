<?php

    include_once 'Fornecedor.php';
    include_once 'Produto.php';

    //Instancia Fornecedor
    $fornecedor = new Fornecedor();

    $fornecedor->codigp1 = 848;
    $fornecedor->RazaoSocial = 'Bom gosto Alimentos S.A';
    $fornecedor->Endereco = 'Rua Ipi Ranga';
    $fornecedor->Cidade = 'Poço de Caldas';

    //Instancia Produto
    $produto = new Produto();

    $produto->Codigo = 462;
    $produto->Descricao = 'Doce de Pêssego';
    $produto ->Preco = '1.24';
    $produto ->Fornecedor = $fornecedor;

    //imprime atributos
    echo 'Código: ' . $produto->Codigo . "<br>";
    echo 'Descrição' . $produto->Descricao. "<br>";
    echo 'Código: '. $produto->Fornecedor->Codigo .  "<br>";
    echo 'Razão Social: '. $produto->Fornecedor->RazaoSocial . "<br>";

    $produto->Codigo .  "<br>";
    $produto->Descricao.  "<br>";
    $produto->Fornecedor->Codigo .  "<br>";
    $produto->Fornecedor->RazaoSocial.  "<br>";

    ?>