<?php    

if(isset($_SESSION['PRO'])){
    $smarty = new Template();

    $carrinho = new Carrinho();

    $smarty->assign('PRO', $carrinho->GetCarrinho());
    $smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));

    $smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());

    $smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());

    $smarty->assign('PAG_CONFIRMAR', Rotas::pag_PedidoConfirmar().'#confpedido');

    $smarty->assign('PESO', number_format($carrinho->GetPeso(),3,'.',''));

    $smarty->display('carrinho.tpl');




}else{
    echo '<h4 id="tabelacarrinho" class="alert alert-danger"> Seu carrinho está vazio!</h4>
<h4 class="alert alert-danger">Adicione produtos clicando no botão “Comprar” na página de produto.</h4> ';

    Rotas::Redirecionar(5,Rotas::pag_Produtos());
}


?>
