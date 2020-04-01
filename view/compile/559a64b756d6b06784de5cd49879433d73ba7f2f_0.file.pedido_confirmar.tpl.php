<?php
/* Smarty version 3.1.33, created on 2019-07-20 06:12:32
  from 'C:\wamp64\www\Loja-Virtual\view\pedido_confirmar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d32b0d057ed09_95268466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '559a64b756d6b06784de5cd49879433d73ba7f2f' => 
    array (
      0 => 'C:\\wamp64\\www\\Loja-Virtual\\view\\pedido_confirmar.tpl',
      1 => 1563578960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d32b0d057ed09_95268466 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Confirmar Pedido</h3>
<hr>
<!-- botoes e opções de cima -->
<section class="row">

    <div class="col-md-4 ">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="btn btn-success" title="">Voltar para Carrinho</a>
    </div>


</section>
    <br>

<!--  table listagem de itens -->
<section class="row ">

    <center>
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

    <div class="col-md-4 text-right">

    </div>

    <div class="col-md-4 text-right text-danger bg-warning">
        <h4>
           Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

        </h4>
        <h4>
           Frete : R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>

        </h4>
        <hr>
        <h4>
           Total com Frete : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>

        </h4>
    </div>



</section>
            <br>
            <hr>
<section class="row" id="confirmarpedido">
    <div class="col-md-4 ">
    </div>
    <div class="col-md-4 ">

        <form name="pedido_finalizar" id="pedido_finalizar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_FINALIZAR']->value;?>
">

           <!-- botão finalzar -->
           <button class="btn btn-success btn-block btn-lg" type="submit" >  <i class="glyphicon glyphicon-ok"></i> Finalizar Pedido </button>


       </form>

   </div>
    <div class="col-md-4 ">
    </div>

</section>
       <br>
       <br>
       <br>
       <br>
<?php }
}
