<?php 
$smarty = new Template();


$categorias = new Categorias();

$categorias->GetCategorias();

//INSERINDO NOVA CATEGORIA
if(isset($_POST['cate_nova']) && isset($_POST['cate_nome'])){
    $cate_nome = $_POST['cate_nome'];
    if($categorias->Inserir($cate_nome)){
        echo '<script>alert("Categoria inserida com sucesso");</script>';
        echo '<div class="alert alert-success">Categoria inserida com sucesso</div>';
        Rotas::Redirecionar(0, Rotas::pag_CategoriasADM());
    }else{
        echo '<script>alert("Erro ao inserir!");</script>';
        echo '<div class="alert alert-danger">Erro ao inserir!</div>';
        Rotas::Redirecionar(4, Rotas::pag_CategoriasADM());
    }
}


//EDITANDO CATEGORIA
if(isset($_POST['cate_editar'])){
    $cate_nome = $_POST['cate_nome'];
    $cate_id = $_POST['cate_id'];

    if($categorias->Editar($cate_id, $cate_nome)){
        echo '<script>alert("Categoria editada com sucesso");</script>';
        echo '<div class="alert alert-success">Categoria editada com sucesso</div>';
        Rotas::Redirecionar(0, Rotas::pag_CategoriasADM());
    }else{
        echo '<script>alert("Erro ao editar!");</script>';
        echo '<div class="alert alert-danger">Erro ao editar!</div>';
        Rotas::Redirecionar(4, Rotas::pag_CategoriasADM());
    }
}

//APAGANDO CATEGORIA
if(isset($_POST['cate_apagar'])){
    $cate_id = $_POST['cate_id'];

    if($categorias->Apagar($cate_id)){
        echo '<script>alert("Categoria apagada com sucesso");</script>';
        echo '<div class="alert alert-danger">Categoria apagada com sucesso</div>';
        Rotas::Redirecionar(0, Rotas::pag_CategoriasADM());
    }else{
        echo '<script>alert("Erro ao apagar!");</script>';
        echo '<div class="alert alert-danger">Erro ao apagar!</div>';
        Rotas::Redirecionar(4, Rotas::pag_CategoriasADM());
    }
}


$smarty->assign('CATEGORIAS', $categorias->GetItens());

$smarty->display('adm_categorias.tpl');






?>
