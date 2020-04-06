<!DOCTYPE html>

<html>
    <head>
        <title>{$TITULO_SITE}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="{$GET_TEMA}/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- meu aquivo pessoal de CSS-->
        <link href="{$GET_TEMA}/tema/css/tema.css" rel="stylesheet" type="text/css"/>

        <link href="{$GET_TEMA}/tema/contatos/contatos.css" rel="stylesheet" type="text/css"/>
     <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>
    <body>

<!--         começa  o container geral <i class="glyphicon glyphicon-user"></i>-->
        <div class="container-fluid">

            <a id="minhacontaflutua" href="https://api.whatsapp.com/send?phone=5512981199155"><img src="{$GET_TEMA}/imagens/whatsapp-logo-4-1.png" alt=""></a>

            <!-- começa a div topo -->
            <div class="row" id="topo">


                <div class="container">
                    <div id="logotipo" class="col-md-6" >
                        <a href="{$GET_SITE_HOME}"><img src="{$GET_TEMA}/imagens/logo-japa.jpg" alt=""></a>
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
                                <li><a href="{$GET_SITE_HOME}"><i class="glyphicon glyphicon-home"></i> Home </a> </li>
                                <li><a href="{$PAG_PRODUTOS}#produtos"><i class="glyphicon glyphicon-tag"></i> Produtos </a> </li>
                                <li><a href="{$PAG_MINHACONTA}#minhaconta"><i class="glyphicon glyphicon-user"></i> Minha Conta </a> </li>
                                <li><a href="{$PAG_CARRINHO}#tabelacarrinho"><i class="glyphicon glyphicon-shopping-cart"></i> Carrinho </a> </li>
                                <li><a href="https://api.whatsapp.com/send?phone=5512982509092" ><i class="glyphicon glyphicon-envelope"></i> Contato </a> </li>
                            </ul>


                            <form name="txt_buscar" method="post" action="" class="navbar-form navbar-right" role="search">
                                <div class="form-group">
                                    <input name="txt_buscar" type="text" class="form-control" placeholder="Digite para buscar" required>
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
                <div class="col-md-2" id="lateral">

                <div class="list-group">
                    <span class="list-group-item active"> CATEGORIAS</span>

                    <a href="{$PAG_PRODUTOS}#produtos" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span>Todos</a>

                    {foreach from = $CATEGORIAS item = C}
                    <a href="{$C.cate_link}#produtos" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span>{$C.cate_nome}</a>

                    {/foreach}

                </div><!--fim da list group-->

                </div> <!-- finm coluna esquerda -->

                <!-- coluna direita CONYEUDO CENTRAL -->
                <div class="col-md-10">


                    <ul class="breadcrumb">
                        <li><a href="#"><i class="glyphicon glyphicon-home"></i> Home </a></li>
                        <li><a href="#"> Produtos </a></li>
                        <li><a href="#"> Info </a></li>
                    </ul>
                    <!-- fim do menu breadcrumb-->
                    {php}
                    Rotas::get_Pagina();
                    //var_dump(Rotas::$pag);

                    {/php}


                </div>  <!--fim coluna direita-->

            </div>

        





            </div><!-- fim DIV conteudo-->

            <!-- começa div rodape -->
            <div class="row" id="rodape">
                <footer>
                    <ul>
                        <li><a href="https://www.facebook.com/DeliveryLitoralFrutas/">
                        <img src="{$GET_TEMA}/imagens/facebook.png" width="50" height="50"></a></li>
                        <li><a href="https://www.instagram.com/gaby.sallys.9"><img src="{$GET_TEMA}/imagens/instagram.png" width="50" height="50"></a></li>

                        <li><a href="https://api.whatsapp.com/send?phone=5512981199155"><img src="{$GET_TEMA}/imagens/whatsapp.png" width="50" height="50"></a></li>
                    </ul>
                    <h6>Copyright &copy; 2019 - desenvolvido por <a href="https://www.linkedin.com/in/williansalesgabriel">Willian</a></h6>
                </footer>


            </div><!-- fim div rodape-->



           </div> <!-- fim do container geral -->



<!--        Arquivos JavaScript    -->
        <script src="{$GET_TEMA}/tema/js/jquery-2.2.1.min.js" type="text/javascript"></script>
        <script src="{$GET_TEMA}/tema/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="{$GET_TEMA}/tema/js/script-cep.js" type="text/javascript"></script>
<!--        <script src="{$GET_TEMA}/tema/contatos/contatos.js" type="text/javascript"></script>-->
        <script src="{$GET_TEMA}/tema/js/script.js" type="text/javascript"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
    </body>
</html>
