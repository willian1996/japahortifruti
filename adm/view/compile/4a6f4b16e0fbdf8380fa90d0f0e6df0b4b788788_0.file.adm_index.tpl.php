<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-03 21:45:55
  from 'C:\wamp64\www\japahortifruti\adm\view\adm_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e87d8c3ec1a86_55191545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a6f4b16e0fbdf8380fa90d0f0e6df0b4b788788' => 
    array (
      0 => 'C:\\wamp64\\www\\japahortifruti\\adm\\view\\adm_index.tpl',
      1 => 1570525704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e87d8c3ec1a86_55191545 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- meu aquivo pessoal de CSS-->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/tema.css" rel="stylesheet" type="text/css"/>

        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/contatos/contatos.css" rel="stylesheet" type="text/css"/>
     <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
        <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    </head>
    <body>

<!--         começa  o container geral <i class="glyphicon glyphicon-user"></i>-->
        <div class="container-fluid">
            <a id="minhacontaflutua" href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/imagens/security_icon.png" alt=""></a>


            <!-- começa a div topo -->
            <div class="row" id="topo">


                <div class="container">
                    <div id="logotipo" class="col-md-6" >
                        <br>
                        <h1><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADM']->value;?>
">JAPA<br> HORTIFRUTI ADM</a></h1>
                        <br>
                    </div>

                </div>


            </div><!-- fim da div topo -->

           <!-- começa a barra MENU-->
            <div class="row" id="barra-menu">

                <!--começa navBAR-->
                <nav class="navbar navbar-inverse">

                    <!-- container navBAr-->
                    <div class="container">
                        <!-- header da navbar-->
                        <div class="navbar-header">
                           <!-- botao que mostra e esconde a navbar-->
                           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                               <span class="sr-only">Toggle navigation</span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </button>

                        </div><!--fim header navbar-->

                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="nav navbar-nav">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADM']->value;?>
"><i class="glyphicon glyphicon-home"></i> Home </a> </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PRODUTOS']->value;?>
"><i class="glyphicon glyphicon-tag"></i> Produtos </a> </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
"><i class="glyphicon glyphicon-list-alt"></i> Cetegorias </a> </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_CLIENTE']->value;?>
"><i class="glyphicon glyphicon-user"></i> Clientes </a> </li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PEDIDOS']->value;?>
" ><i class="glyphicon glyphicon-shopping-cart"></i> Pedidos </a> </li>
                                <li><a href="http://williansaleswebdev.com/Relatorios-Gaby-Modas/" ><i class="glyphicon glyphicon-piggy-bank"></i> Relatórios </a> </li>
                            </ul>


                            <form class="navbar-form navbar-right" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Digite para buscar" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </form>

                         </div><!-- fim navbar collapse-->


                    </div> <!--fim container navBar-->

                </nav><!-- fim da navBar-->



 

            </div> <!-- fim barra menu-->
            <!-- começa DIV conteudo-->
            <div class="row" id="conteudo">

            <div class="container">

                <!-- coluna da esquerda -->
                <div class="col-md-2 hiddenonmobile" id="lateraladm">

                <div class="list-group">
                    <span class="list-group-item active"> Categorias</span>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PRODUTOS']->value;?>
#produtos" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span>Todos</a>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link_adm'];?>
#produtos" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</a>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </div><!--fim da list group-->

                </div> <!-- finm coluna esquerda -->

                <!-- coluna direita CONYEUDO CENTRAL -->
                <div class="col-md-10">
                    <section class="row" id="menuadm">

    <div class="text-center">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PRODUTOS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-tag"></i> Produtos</a>

        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-list-alt"></i>Categorias</a>

        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_CLIENTE']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-user"></i> Clientes </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PEDIDOS']->value;?>
" class="btn btn-warning"><i class="glyphicon glyphicon-shopping-cart"></i> Pedidos </a>
        <a href="http://williansaleswebdev.com/Relatorios-Gaby-Modas/" class="btn btn-info"><i class="glyphicon glyphicon-piggy-bank"></i> Relatórios </a>


    </div>
</section><!--minhaconta-->
<hr>



<!--
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="glyphicon glyphicon-home"></i> Home </a></li>
                        <li><a href="#"> Produtos </a></li>
                        <li><a href="#"> Info </a></li>
                    </ul>
-->
                    <!-- fim do menu breadcrumb-->
                    <?php 
                    Rotas::get_Pagina();
                    //var_dump(Rotas::$pag);

                    ?>


                </div>  <!--fim coluna direita-->

                

            </div>
                
                
            
            </div><!-- fim DIV conteudo-->
            
            

            <!-- começa div rodape -->
            <div class="row" id="rodape">
                <footer>
                    <ul>
                        <li><a href="https://www.facebook.com/gabytavares.com.br/">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/imagens/facebook.png" width="50" height="50"></a></li>
                        <li><a href="https://www.instagram.com/gaby.sallys.9"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/imagens/instagram.png" width="50" height="50"></a></li>

                        <li><a href="https://api.whatsapp.com/send?phone=5512981819956"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/imagens/whatsapp.png" width="50" height="50"></a></li>
                    </ul>
                    <h6>Copyright &copy; 2019 - desenvolvido por <a href="https://www.linkedin.com/in/williansalesgabriel">Willian</a></h6>
                </footer>


            </div><!-- fim div rodape-->



           </div> <!-- fim do container geral -->



<!--        Arquivos JavaScript    -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery-2.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/script-cep.js" type="text/javascript"><?php echo '</script'; ?>
>
<!--        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/contatos/contatos.js" type="text/javascript"><?php echo '</script'; ?>
>-->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/script.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
