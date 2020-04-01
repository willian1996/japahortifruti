<?php  
$smarty = new Template();



//if(!isset($_GET['cod_pedido'])){
//    Rotas::Redirecionar(0, Rotas::pag_PedidosADM());
//    exit();
//}



$itens = new Itens();

$pedido = filter_var($_GET['cod_pedido'], FILTER_SANITIZE_STRING);

$itens->GetItensPedido($pedido);
$smarty->assign('ITENS', $itens->GetItens());
$smarty->assign('TOTAL', $itens->GetTotal());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('PAG_EDITAR', Rotas::pag_ClientesEditarADM());


$pedidos = new Pedidos();
$pedidos->GetPedidosREF($pedido);
$smarty->assign('PEDIDOS', $pedidos->GetItens());

if(isset($_POST['mudar_status'])){
    $status = $_POST['ped_status'];
    
    if($pedidos->mudarStatusPedido($status, $pedido)){
        echo "Pedido atualizado com sucesso";
        Rotas::Redirecionar(0, Rotas::pag_ItensADM().'?cod_pedido='.$pedido);
        
    }else{
        echo "<script>alert('erro');</script>";
    }
    
}

$smarty->display('adm_itens.tpl');





?>
