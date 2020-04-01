<?php
$smarty = new Template();

$categorias = new Categorias();
$categorias->GetCategorias();

$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());

if(isset($_POST['pro_nome']) && isset($_POST['pro_valor'])){
    $pro_nome      = $_POST['pro_nome'];
    $pro_categoria = $_POST['pro_categoria'];
    $pro_ativo     = $_POST['pro_ativo'];
    $pro_ref       = uniqid();
    $pro_valor     = $_POST['pro_valor'];
    $pro_peso      = "0,050";
    $pro_tamanho    = "P";
    $pro_img       = $_FILES['pro_img']['name'];
    $pro_desc      = $_POST['pro_desc'];
    $pro_slug      = $_POST['pro_slug'];

    if(!empty($_FILES)){
        $upload = new ImageUpload();
        if($upload->Upload(900, 'pro_img')){
            $pro_img = $upload->retorno;
        }else{
            echo "<div class='alert alert-danger'>Erro ao enviar imagem<br></div>";
        }
    }

    $gravar = new Produtos();

    $gravar->Preparar($pro_nome, $pro_categoria, $pro_ativo, $pro_ref, $pro_valor, $pro_peso, $pro_tamanho, $pro_img, $pro_desc, $pro_slug);

    if($gravar->Inserir()){
        echo "<div class='alert alert-success'><br>Produto cadastrado com sucesso!!<br></div>";
        Rotas::Redirecionar(2, Rotas::pag_ProdutosADM());
    }else{
        echo "<div class='alert alert-danger'><br>Produto não cadastrado!!";
        Sistema::VoltarPagina();
        echo "<br></div>";
    }


}else{
    $smarty->display('adm_produtos_novo.tpl');
}














?>
