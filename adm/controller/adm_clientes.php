<?php 
$smarty = new Template(); 

$cliente = new Clientes();

if(isset($_GET['txt_nome'])){
    $campo = $_GET['txt_nome'];
    $cliente->GetClientesByNomeOrCell($campo);
    
}else{
    $cliente->GetClientes();
    
}



$smarty->assign('CLIENTES', $cliente->GetItens());
$smarty->assign('PAG_EDITAR', Rotas::pag_ClientesEditarADM());
$smarty->assign('PAG_PEDIDOS', Rotas::pag_PedidosADM()); 
$smarty->assign('PAGINAS', $cliente->ShowPaginacao());






$smarty->display('adm_clientes.tpl');






?>
