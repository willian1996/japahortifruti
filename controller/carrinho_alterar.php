<?php

if(!isset($_POST['pro_id']) || $_POST['pro_id'] < 1){
    echo '<h4 class="alert alert-danger"> Erro na operação! </h4>';
    Rotas::Redirecionar(1,Rotas::pag_Carrinho());
    exit;
}
$id = (int)$_POST['pro_id'];
//if(!isset($_POST['pro_tamanho']) || empty($_POST['pro_tamanho'])){
//    if(!isset($_SESSION['PRO'][$id]['TAMANHO'])){
//        echo '<script>alert("Escolha o tamanho");</script>';
//        echo "<script>javascript:history.back(-2)</script>";
//        exit; 
//    }
//    
//}

$tamanho = isset($_POST['pro_tamanho'])?$_POST['pro_tamanho']:'';

$tamanho = filter_var($tamanho, FILTER_SANITIZE_STRING);

$carrinho = new Carrinho();

 
try{
    $carrinho->CarrinhoADD($id, $tamanho);
}catch(Exception $e){
    echo '<h4 class="alert alert-danger"> Erro na operação! </h4>';
}

Rotas::Redirecionar(0,Rotas::pag_Carrinho());
