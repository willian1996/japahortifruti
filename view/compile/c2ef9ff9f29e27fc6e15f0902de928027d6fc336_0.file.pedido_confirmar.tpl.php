<?php
/* Smarty version 3.1.33, created on 2019-08-09 00:39:18
  from 'C:\xampp\htdocs\Loja-Virtual-Gaby-Modas\view\pedido_confirmar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4ceae6ddd038_70511742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2ef9ff9f29e27fc6e15f0902de928027d6fc336' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Loja-Virtual-Gaby-Modas\\view\\pedido_confirmar.tpl',
      1 => 1565321957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4ceae6ddd038_70511742 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Confirmar Pedido</h3>
<hr>
<!-- botoes e opções de cima -->
<section class="row">

    <div class="col-md-4 ">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="btn btn-success" title="">Voltar para carrinho e alterar pedido</a>
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
            <td><strong><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_tamanho'];?>
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
        <br>
        <h4>
           Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

        </h4>
        <h4>
           Frete : A calcular...
        </h4>
        <hr>
<!--
        <h4>
           Total com Frete : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>

        </h4>
-->
    </div>


</section>     
<hr>
<section class="row">
    <div>
        <center>
            <h4><strong>Entregaremos no</strong></h4>
            <p>Endereço: <?php echo $_smarty_tpl->tpl_vars['CLI_ENDERECO']->value;?>
</p>
            <p>Numero: <?php echo $_smarty_tpl->tpl_vars['CLI_NUMERO']->value;?>
</p>
            <p>Ponto de Referência: <?php echo $_smarty_tpl->tpl_vars['CLI_PONTO_REFERENCIA']->value;?>
</p>
            <p>Bairro: <?php echo $_smarty_tpl->tpl_vars['CLI_BAIRRO']->value;?>
</p>
            <p>Cidade: <?php echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;?>
</p>
            <p>CEP: <?php echo $_smarty_tpl->tpl_vars['CLI_CEP']->value;?>
</p>
            
            


        
        
        
        </center>
    
    
    
    
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
