<?php

$smarty = new Template();
$gravar = new Produtos();

if(isset($_POST['pro_apagar']) && isset($_POST['pro_id_apagar']) && $_POST['pro_apagar'] == 'SIM'){
	if($gravar->Apagar($_POST['pro_id_apagar'])){
        echo '<script>alert("Produto Excluido com Sucesso!!");</script>';
		echo '<div class="alert alert-success">Produto Excluido com Sucesso!!</div>';
		@unlink($_POST['pro_img_arquivo']);
		Rotas::Redirecionar(2, Rotas::pag_ProdutosADM());
		exit();
	}else{
        echo '<script>alert("O produto não pode ser excluido!!");</script>';
		echo '<div class="alert alert-danger">O produto não pode ser excluido!!</div>';
	}
}


if(isset($_POST['pro_nome']) && isset($_POST['pro_valor'])){
	$pro_nome      = $_POST['pro_nome'];
    $pro_categoria = $_POST['pro_categoria'];
    $pro_ativo     = $_POST['pro_ativo'];
    $pro_ref       = $_POST['pro_ref'];
    $pro_valor     = $_POST['pro_valor'];
    $pro_peso      = "0,050";
    $pro_tamanho    = "P";
    $pro_img          = $_FILES['pro_img']['name'];
    $pro_desc         = $_POST['pro_desc'];
    $pro_slug      = $_POST['pro_slug'];
    $pro_id    = $_POST['pro_id'];
    $pro_img_arquivo = $_POST['pro_img_arquivo'];



    if(!empty($_FILES['pro_img']['name'])){
    	$upload = new ImageUpload();
    	if($upload->Upload(900, 'pro_img')){
    		$pro_img = $upload->retorno;
    		@unlink($pro_img_arquivo);
    	}else{
    		exit('Erro ao enviar a imagem');
    	}
    }else{
        $pro_img = $_POST['pro_img_atual'];
    }
 




    $gravar->Preparar($pro_nome, $pro_categoria, $pro_ativo, $pro_ref, $pro_valor, $pro_peso, $pro_tamanho, $pro_img, $pro_desc, $pro_slug);


    if($gravar->Alterar($pro_id)){
        echo '<script>alert("Produto Editato com Sucesso!!");</script>';
    	echo '<div class="alert alert-success">Produto Editato com Sucesso!!</div>';
    	Rotas::Redirecionar(2, Rotas::pag_ProdutosADM());
    }else{
        echo '<script>alert("Produto não Editado!!");</script>';
    	echo '<div class="alert alert-danger">Produto não Editado!!';
    	Sistema::VoltarPagina();
    	echo '</div>';
    	exit();
    }



}





$categorias = new Categorias();
$categorias->GetCategorias();


//pegar o id dos produtos
$produtos = new Produtos();
$id = $_POST['pro_id'];
$produtos->GetProdutosID($id);

$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PRO', $produtos->GetItens());

$smarty->display('adm_produtos_editar.tpl');

?>
