<?php
/* Smarty version 3.1.33, created on 2019-08-17 16:49:32
  from 'C:\wamp64\www\Loja-Virtual-Gaby-Modas\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d585a4c390564_41901128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd77c7c29f5a7a6fdfe77b8f2b9fc57b4a60a9d5' => 
    array (
      0 => 'C:\\wamp64\\www\\Loja-Virtual-Gaby-Modas\\view\\carrinho.tpl',
      1 => 1566071369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d585a4c390564_41901128 (Smarty_Internal_Template $_smarty_tpl) {
?>   
<h3>Meu Carrinho</h3>
<hr>
<!-- botoes e opções de cima -->
<section class="row">

    <div class="col-md-4 ">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" class="btn btn-success" title="">Comprar mais</a>
    </div>


</section> 
    <br>

<!--  table listagem de itens -->
<section class="row ">

    <center>
    <table id="tabelacarrinho" class="table table-bordered" style="width: 95%">



        <tr class="text-danger bg-danger">
            <td></td>
            <td>Produto</td>
            <td>Valor R$</td>
            <td>T</td>
            <td>Sub Total R$</td>
        </tr>


       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>

        <tr>

            <td> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
"> </td>
            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_tamanho'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>

                <form name="carrinho_dell" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">

                    <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                    <input type="hidden" name="acao" value="del">

                    <button class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-trash"></i> </button>
                </form>


            </td>
<!--
            <td>

            </td>
-->


        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    </table>

    </center>


</section><!-- fim da listagem itens -->

<!--  bloco frete -->
<!--
<section class="row" id="dadosfrete">




       <div class="col-md-4"></div>


       <div class="col-md-4">
-->

           <!-- campos para tratar  do  frete -->
<!--
           <input type="hidden" name="peso_frete" id="peso_frete" value="<?php echo $_smarty_tpl->tpl_vars['PESO']->value;?>
" class="form-control " readonly required>

           <input type="text" name="cep_frete" class="form-control" id="cep_frete" value="" placeholder="digite seu cep" >


           <input type="hidden" name="frete_valor" id="frete_valor" value="0">


    </div>


       <div class="col-md-4">
-->
           <!-- botão frete -->
<!--
           <button class="btn btn-warning btn-block" id="buscar_frete"> <i class="glyphicon glyphicon-send"></i> Calcular Frete </button>


       </div>




</section>
<br><hr>
-->

<!-- botoes de baixo e valor total -->
<section class="row" id="total">

    <div class="col-md-4 text-right">


    </div>
    <div class="col-md-4 text-right">


    </div>

    <div class="col-md-4 text-right text-danger bg-warning">
    <h4>
       Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
 + Frete
    </h4>
        

    </div>


    <!-- botão de limpar-->
<!--
    <div class="col-md-4 ">

        <form name="limpar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
            <input type="hidden" name="acao" value="limpar">
            <input type="hidden" name="pro_id" value="1">

            <button class="btn btn-danger btn-block"> <i class="glyphicon glyphicon-trash"></i> Limpar Tudo</button>

        </form>

    </div>
-->
</section>
<br>

<section>
    <center>
        <h4><strong>Pagamento na Entrega</strong></h4> 
        <p>Entregamos somente em <strong>São Sebastião</strong>, <strong>Ilhabela</strong> e <strong>Caraguatatuba</strong> o  frete pode custar de R$0,00 á R$7,00 dependendo do seu bairro e cidade, será informado pelo Whatsapp após a confirmação do pedido.</p>
        <hr>
         <ul>
                <li>NA PRÓXIMA QUARTA-FEIRA ENTREGAREMOS EM SÃO SEBASTIÃO.</li><br>
                <li>NA PRÓXIMA QUINTA-FEIRA ENTREGAREMOS EM CARAGUATATUBA.</li><br>
                <li>NA PRÓXIMA SEXTA-FEIRA ENTREGAREMOS NA ILHABELA.</li><br>
                <li>NO PRÓXIMO SÁBADO ENTREGAREMOS NA COSTA SUL DE SÃO SEBASTIÃO ATÉ BORACÉIA.</li><br>
            </ul>
    </center>
</section>






<br>
<section class="row" id="confirmarpedido">
    <div class="col-lg-4 ">
    </div>
    <div class="col-lg-4 ">
    </div>
    <div class="col-md-4 text-right">

        <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONFIRMAR']->value;?>
">
            <span id="frete"></span>
           <!-- botão finalzar -->
           <button class="btn btn-success btn-block btn-lg" type="submit" >  <i class="glyphicon glyphicon-ok"></i> Confirmar Pedido </button>


       </form>

   </div>



</section>
       <br>
       <br>
       <br>
       <br>
<?php }
}
