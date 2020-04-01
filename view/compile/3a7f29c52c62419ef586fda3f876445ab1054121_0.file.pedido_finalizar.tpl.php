<?php
/* Smarty version 3.1.33, created on 2019-07-28 03:24:22
  from 'C:\wamp64\www\Loja-Virtual\view\pedido_finalizar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3d3f963aace2_64554031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a7f29c52c62419ef586fda3f876445ab1054121' => 
    array (
      0 => 'C:\\wamp64\\www\\Loja-Virtual\\view\\pedido_finalizar.tpl',
      1 => 1564293705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3d3f963aace2_64554031 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 id="tabelafinalizar">Finalizar Pedido</h2>
<hr>


<!--  table listagem de itens -->
<section class="row ">
    
    

    <center>
        <div class="alert alert-success">
        Pedido Finalizado com Sucesso
    
    </div>
    <table class="table table-bordered" style="width: 95%">



        <tr class="text-danger bg-danger">
            <td></td>
            <td>Produto</td>
            <td>Valor R$</td>
            <td>X</td>
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
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
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

        <!-- botoes de baixo e valor total -->
        <section class="row" id="total">

            <div class="col-md-4 text-right">

            </div>

            <div class="col-md-12 text-right text-danger bg-warning">
            <h4>
               Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

            </h4>
                <h4>
               Frete : R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>

            </h4>
                <hr>
            <h4>
               Total do Pedido : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>

            </h4>
            </div>


        </section>

<section class="row">
            <h3 class="text-center"> Formas de pagamento </h3>
            

            <!-- botao de pagamento  -->
            <div class="col-md-4">




                


<!--                   <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>-->

            </div>
            <div class="col-md-4">

                <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/imagens/logo-pagseguro.png"  alt="">

            </div>

            <div class="col-md-4">

            </div>


</section>

                    <br>
                    <hr>

       <br>
       <br>
       <br>
       <br>
<?php }
}
