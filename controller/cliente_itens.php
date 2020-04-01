<?php 
 
$smarty = new Template();


$pedidos = new Pedidos(); 

Login::MenuCliente();


if(isset($_POST['ped_apagar'])){
    $ped_cod = $_POST['cod_pedido'];
    if($pedidos->Cancelar($ped_cod)){
        echo '<script>alert("Pedido cancelado com sucesso")</script>';    
        Rotas::Redirecionar(3, Rotas::pag_CLientePedidos());
    }else{
        echo '<script>alert("Erro ao cancelar pedido")</script>'; 
    }
}


if(!isset($_POST['cod_pedido'])){
    Rotas::Redirecionar(1, Rotas::pag_CLientePedidos());
    exit();
}

$itens = new Itens();
$pedido = filter_var($_POST['cod_pedido'], FILTER_SANITIZE_STRING);

$itens->GetItensPedido($pedido);
$smarty->assign('ITENS', $itens->GetItens());
$smarty->assign('TOTAL', $itens->GetTotal());


$smarty->display('cliente_itens.tpl');
