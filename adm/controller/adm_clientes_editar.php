<?php
 
$smarty = new Template();
$clientes = new Clientes();




if(isset($_POST['cli_nome']) and isset($_POST['cli_celular']) and isset($_POST['cli_cpf'])){
    $cli_id = $_POST['cli_id'];
    $cli_nome = $_POST['cli_nome'];
    $cli_cpf       = $_POST['cli_cpf'];
    $cli_fone      = $_POST['cli_fone'];
    $cli_celular   = $_POST['cli_celular'];
    $cli_endereco  = $_POST['cli_endereco'];
    $cli_numero    = $_POST['cli_numero'];
    $cli_ponto_referencia = $_POST['cli_ponto_referencia'];
    $cli_bairro    = $_POST['cli_bairro'];
    $cli_cidade    = $_POST['cli_cidade'];
    $cli_cep       = $_POST['cli_cep'];
    $cli_senha     = isset($_POST['txt_senha'])?$_POST['txt_senha']:"";
    $cli_data_cad  = "";
    



    $clientes->Preparar($cli_nome, $cli_cpf, $cli_fone, $cli_celular, $cli_endereco, $cli_numero, $cli_ponto_referencia, $cli_bairro, $cli_cidade, $cli_cep, $cli_data_cad, $cli_senha);

    if(!$clientes->EditarADM($cli_id)){
        echo '<script>alert("Ocorreu um erro ao alterar os dados!");</script>';
        echo '<div class="alert alert-danger">Ocorreu um erro ao alterar os dados';
    
    }else{
        echo  '<script> alert("Dados alterados com sucesso!"); </script>';
        echo '<div class="alert alert-success">Dados alterados com sucesso!';
        echo "</div>";
        Rotas::Redirecionar(2, Rotas::pag_ClientesADM());
        


    }

}else{
    if(isset(Rotas::$pag[1])){
        $id = Rotas::$pag[1];
    }else{
        $id = 0;
    }
    
    $id = Rotas::$pag[1];
    $clientes->GetClientesID($id);
    foreach($clientes->GetItens()[1] as $campo =>$valor){
        $smarty->assign(strtoupper($campo), $valor);
    }
    
    
    $smarty->display('adm_clientes_editar.tpl');
}















