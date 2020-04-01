<?php
/* Smarty version 3.1.33, created on 2019-08-10 01:34:00
  from 'C:\xampp\htdocs\Loja-Virtual-Gaby-Modas\adm\view\adm_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4e4938a5e461_82101036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7237f2bb276f7775a978219c1177ac91bd93088' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Loja-Virtual-Gaby-Modas\\adm\\view\\adm_itens.tpl',
      1 => 1565411638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4e4938a5e461_82101036 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="text-center">Dados do Pedido</h3> 

<!-- informações sobre o pedido -->
<section class="row">
    <center>
    <table class="table table-bordered" style="width: 100%">
        <tr class="bg-success">
            <td><b>Data:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_data'];?>
</td>
            <td><b>Hora:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_hora'];?>
</td>
            <td><b>Ref:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_ref'];?>
</td>
        </tr>  
    </table>
    </center>
</section>

<!-- listagem dos itens --->
<section class="row" id="listaitens">
    <center>
    <table class="table table-bordered" style="width: 100%">
        <tr class="text-success bg-success">
            <td></td>
            <td>Item</td>
            <td>Valor Uni</td>
            <td>T</td>
            <td>Sub</td>
        </tr>
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITENS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
        <tr>
            <td><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['item_img'];?>
" alt=""> </td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['item_produto'];?>
#nomeproduto"><?php echo $_smarty_tpl->tpl_vars['P']->value['item_qtd'];?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value['item_nome'];?>
</a></td>
            <td class="text-right"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_valor'];?>
</td>
            <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_tamanho'];?>
</td>
            <td class="text-right"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_sub'];?>
</td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
    </center>
</section>

<section class="row" id="resumo">
    <br>
    <center>
        <?php if ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'CANCELADO') {?>
          <b>Status: </b><span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span>
        <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'ENTREGUE') {?>
          <b>Status: </b><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span>
        <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'SOLICITADO') {?>
          <b>Status: </b><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span>
        <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'SEPARADO') {?>
          <b>Status: </b><span class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span>
        <?php } else { ?>
          <b>Status:</b><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>

        <?php }?>
    </center>
    <br>
    <center>
        <table class="table table-bordered" style="width: 100%">
            <tr>
                <td class="text-danger"> <b>Frete:</b> R$<?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor'];?>
</td>
                <td class="text-danger"> <b>Total:</b> R$<?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>
<!--                <td class="text-danger"> <b>Final:</b> R$<?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']+$_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>-->
            </tr> 
        </table>
    </center>
    
    <br><hr>
    <center>
        <h4>Mudar Status do Pedido</h4>
        <form method="post" action="">
            <select name="ped_status">
                <option value="SOLICITADO" <?php ob_start();
echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 'SOLICITADO') {?>selected="selected"<?php }?>>SOLICITADO</option>
                <option value="SEPARADO" <?php ob_start();
echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 'SEPARADO') {?>selected="selected"<?php }?>>SEPARADO</option>
                <option value="ENTREGUE" <?php ob_start();
echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 'ENTREGUE') {?>selected="selected"<?php }?>>ENTREGUE</option>
                <option value="CANCELADO" <?php ob_start();
echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == 'CANCELADO') {?>selected="selected"<?php }?>>CANCELADO</option>
            </select>
            <br><br>
            <button name="mudar_status" class="btn btn-danger btn-sm">Mudar</button>
        </form>
    </center>
</section>

<br>
<hr>    

    <h3 class="text-center">Dados do Cliente</h3>
<section>
    
    <center>
        <table class="table table-bordered" style="width: 100%">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
              <tr>
                <td style="width: 20%;" class="bg-info"><b>Nome</b></td>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_EDITAR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
"><?php echo strtoupper($_smarty_tpl->tpl_vars['C']->value['cli_nome']);?>
</a></td>
              </tr>
              <tr>
                <td class="bg-info"><b>CPF</b></td>
                <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_cpf'];?>
</td>
              </tr>
              <tr>
                <td class="bg-info"><b>Whatsapp</b></td>
                <td><a href="https://wa.me/55<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_celular'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_celular'];?>
</a></td>
              </tr>
              <tr>
                <td class="bg-info"><b>Telefone</b></td>
                <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_fone'];?>
</td>
              </tr>
              <tr>
                <td class="bg-info"><b>Rua</b></td>
                <td><?php echo strtoupper($_smarty_tpl->tpl_vars['C']->value['cli_endereco']);?>
</td>
              </tr>
              <tr>
                <td class="bg-info"><b>Número</b></td>
                <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_numero'];?>
</td>
              </tr>
              <tr>
                <td class="bg-info"><b>Ponto de referencia</b></td>
                <td><?php echo strtoupper($_smarty_tpl->tpl_vars['C']->value['cli_ponto_referencia']);?>
</td>
              </tr>
              <tr>
                <td class="bg-info"><b>Bairro</b></td>
                <td><?php echo strtoupper($_smarty_tpl->tpl_vars['C']->value['cli_bairro']);?>
</td>
              </tr>
              <tr>
                <td class="bg-info"><b>Cidade</b></td>
                <td><?php echo strtoupper($_smarty_tpl->tpl_vars['C']->value['cli_cidade']);?>
</td>
              </tr>
              <tr>
                <td class="bg-info"><b>CEP</b></td>
                <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_cep'];?>
</td>
              </tr>
             <tr>
                <td class="bg-info"><b>Cadastrado em</b></td>
                <td><?php echo date('d/m/Y H:i',strtotime($_smarty_tpl->tpl_vars['C']->value['cli_data_cad']));?>
</td>
              </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </center>
</section><?php }
}
