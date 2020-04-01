<?php
/* Smarty version 3.1.33, created on 2019-08-16 04:13:57
  from 'C:\wamp64\www\Loja-Virtual-Gaby-Modas\view\clientes_pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5657b5977ce4_26163882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0f08e2c9e88c8fa8be69e72f320bb5762dea2b0' => 
    array (
      0 => 'C:\\wamp64\\www\\Loja-Virtual-Gaby-Modas\\view\\clientes_pedidos.tpl',
      1 => 1564953255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5657b5977ce4_26163882 (Smarty_Internal_Template $_smarty_tpl) {
?><br><br>
<section class="row" id="pedidos">

    <h4 class="text-center">Meus Pedidos</h4>

    <center>
    <?php if ($_smarty_tpl->tpl_vars['PEDIDOS_QUANTIDADE']->value > 0) {?>
    <table id="tabelapedidos" class="table table-bordered" style="width: 90%">

        <tr class="text-danger bg-danger">
            <td>Data</td>
            <td>Hora</td>
            <td class="hiddenonmobile">Ref</td>
            <td>Status</td>
            <td></td>
        </tr>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
        <tr>

            <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
</td>
            <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_hora'];?>
</td>
            <td class="hiddenonmobile" style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_ref'];?>
</td>


            <?php if ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'CANCELADO') {?>
             <td style="width: 10%;"><span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
            <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'ENTREGUE') {?>
              <td style="width: 10%;"><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
            <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'SOLICITADO') {?>
              <td style="width: 10%;"><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
            <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'SEPARADO') {?>
              <td style="width: 10%;"><span class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
            <?php } else { ?>
              <td style="width: 10%;"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</td>
            <?php }?>

        <form name="itens" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">

             <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
             <td style="width: 15%;"><center><button class="btn btn-default">Ver</button></center></td>

        </form>

        </tr>
        
        
        
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </table>
        <?php } else { ?>
         <p>Você ainda não tem pedidos!</p><br>
        <?php }?>
      </center>


</section>

  <!--  paginação inferior   -->
    <section id="pagincao" class="row">
    <center>
    <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

    </center>
    </section>
<?php }
}
