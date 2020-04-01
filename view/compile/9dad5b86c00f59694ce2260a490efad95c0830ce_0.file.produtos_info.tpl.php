<?php
/* Smarty version 3.1.33, created on 2019-08-01 00:01:47
  from 'C:\wamp64\www\Loja-Virtual\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42561bc16cd5_02808726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dad5b86c00f59694ce2260a490efad95c0830ce' => 
    array (
      0 => 'C:\\wamp64\\www\\Loja-Virtual\\view\\produtos_info.tpl',
      1 => 1564628506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42561bc16cd5_02808726 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>

      <h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 - Ref: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</h3>
<hr>

<div class="row">


        <div class="col-md-6">

        <img class="thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
" alt="" width="100%">

    </div>


	    <div class="col-md-6 thumbnail">

        <br>
          <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/imagens/logo-pagseguro.png" alt="">



        <div class="col-md-6">
            <br>
           <h3 class="text-center preco">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>

        </div>
        <div class="col-md-6">
            <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                <br>
                <center><h4>Selecione o tamanho</h4></center>
                <select name="pro_tamanho" class="form-control selectpicker" required>
                    <option value="">selecione</option>
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>

                </select>
                <br>

                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">

<!--                adicionar um select option para P M G GG -->


                <input type="hidden" name="acao" value="add">
                <center><button  class="btn btn-success btn-lg">Colocar no Carrinho</button></center>
                <br><br>
             </form>

        </div>








    </div>




</div>
        <!-- -->
                 <div class="row">
            <hr>
              <h4 class="text-center">Mais imagens</h4>

              <ul style="list-style: none">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
?>


                      <li class="col-md-3 ">
                          <img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome'];?>
" alt="" class="thumbnail">


                      </li>

                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>


        </div>
            
        <div class="row">
            <hr>
            <h4 class="text-center">Descrição do produto</h4>

            <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>


        </div>
            <br>
            <br>


  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
