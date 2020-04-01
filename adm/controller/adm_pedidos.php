<?php 
$smarty = new Template();


$pedidos = new Pedidos();

if(isset($_POST['ped_apagar'])){
    $ped_cod = $_POST['cod_pedido'];
    if($pedidos->Cancelar($ped_cod)){
        echo '<script>alert("Pedido Cancelado")</script>'; 
        echo '<div class="alert alert-success">Pedido Cancelado</div>';    
        Rotas::Redirecionar(1, Rotas::pag_PedidosADM());
    }else{
        echo '<script>alert("Erro ao cancelar pedido")</script>'; 
        echo '<div class="alert alert-danger">Erro ao cancelar pedido</div>';
    }
}

if(isset(Rotas::$pag[1])){
    $id = Rotas::$pag[1];
    $pedidos->GetPedidosCliente($id);
    
}elseif(isset($_POST['data_ini']) && isset($_POST['data_fim'])){
    $pedidos->GetPedidosData($_POST['data_ini'], $_POST['data_fim']);
        
}elseif(isset($_POST['txt_ref'])){
    $ref = filter_var($_POST['txt_ref'], FILTER_SANITIZE_STRING);
    $pedidos->GetPedidosREF($ref);
    
}else{
    $pedidos->GetPedidosCliente();
}

$smarty->assign('PEDIDOS', $pedidos->GetItens());
$smarty->assign('PAG_ITENS', Rotas::pag_ItensADM());
$smarty->assign('PAGINAS', $pedidos->ShowPaginacao());
$smarty->assign('PAG_EDITAR', Rotas::pag_ClientesEditarADM());

if($pedidos->TotalDados() > 0){
    $smarty->display('adm_pedidos.tpl');
}else{
    echo '<div class="alert alert-danger">Nenhum pedido para este cliente</div>';
}









?>
