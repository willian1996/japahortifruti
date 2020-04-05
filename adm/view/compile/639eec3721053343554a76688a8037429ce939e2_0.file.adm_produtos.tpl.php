<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-03 22:17:22
  from 'C:\wamp64\www\japahortifruti\adm\view\adm_produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e87e0226579f0_00732648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '639eec3721053343554a76688a8037429ce939e2' => 
    array (
      0 => 'C:\\wamp64\\www\\japahortifruti\\adm\\view\\adm_produtos.tpl',
      1 => 1564761377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e87e0226579f0_00732648 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="text-center">Gerenciar Produtos</h2>
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
                    <button style="border: 0; background-color: #FFF; text-decoration: underline;"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
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
