<?php
/* Smarty version 3.1.33, created on 2019-08-01 00:54:56
  from 'C:\wamp64\www\Loja-Virtual\adm\view\adm_produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d426290a07264_11172564',
  'has_nocache_code' => false,
  'file_dependency' =>
  array (
    'a11b398a4e1c0229b816856626fa483f6f5b2058' =>
    array (
      0 => 'C:\\wamp64\\www\\Loja-Virtual\\adm\\view\\adm_produtos.tpl',
      1 => 1564631694,
      2 => 'file',
    ),
  ),
  'includes' =>
  array (
  ),
),false)) {
function content_5d426290a07264_11172564 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Gerenciar Produtos</h4>
<hr>
<section class="row ">




    <div class="col-md-4 text-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_NOVO']->value;?>
" class="btn btn-success"> <i class="glyphicon glyphicon-plus"></i> Novo Produto</a>

    </div>
<div class="col-md-4"> </div>



    <div class="col-md-4"> </div>



</section>
<br>

<!--     exibe mensagem caso nao encontre produtos -->
<?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
<h4 class="alert alert-danger">Ops... Nada foi encontrado </h4>
<?php }?>


<!--  começa lista de produtos  ---->
<section id="produtos" class="row">
    <center><p>Clique no nome ou imagem para editar</p></center>
    <table class="table table-bordered">

        <tr class="bg-success text-success">
          <td></td>
          <td>Produto</td>
          <td>Categoria</td>
          <td>Preço</td>
        </tr>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
        <tr>
            <td>
                <form name="proimg" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_IMG']->value;?>
">
                    <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                    <input type="hidden" name="pro_nome" id="pro_nome" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
                    <input type="image" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_p'];?>
">
                </form>
            </td>
            <td>
                <form name="proeditar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_EDITAR']->value;?>
">
                    <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                    <button style="border: 0; background-color: #FFF;"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</button>
                </form>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</td>
            <td>R$<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </table>
</section>


 <!--  paginação inferior   -->
<section id="pagincao" class="row">
<center>
<?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

</center>
</section>
<?php }
}
