<?php
/* Smarty version 3.1.33, created on 2019-08-09 01:26:54
  from 'C:\xampp\htdocs\Loja-Virtual-Gaby-Modas\adm\view\adm_pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4cf60ed030c5_80561572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69e713bc61b58272699516edb9fea9534ec3e879' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Loja-Virtual-Gaby-Modas\\adm\\view\\adm_pedidos.tpl',
      1 => 1565324813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4cf60ed030c5_80561572 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="text-center"> Gerenciar Pedidos </h2> 
<hr>

<section class="row" id="pesquisa">
    <div class="espacamento">
        <!---  faz  uma busca entre datas --->
        <label> Buscar entre datas</label>
        <form name="buscardata" method="post" action="">
            <div class="col-md-3">            
                <input type="date" name="data_ini" class="form-control" required>
            </div> 
            <div class="col-md-3"> 
                <input type="date" name="data_fim" class="form-control" required>
            </div> 
            <div class="col-md-3"> 
                <button class="btn btn-success"> Buscar </button>
            </div> 
            <div class="col-md-3">    
            </div> 
        </form>
    </div>
</section>

<br>

<section class="row">    
    <div class="espacamento">
        <!--- faz  uma busca  por texto ---> 
        <label> Buscar por Referencia</label>
        <form name="buscarrefcod" method="post" action="">  
            <div class="col-md-3">
                <input type="text" name="txt_ref" class="form-control" required>   
            </div>
            <div class="col-md-3">
                <button class="btn btn-success"> Buscar </button>   
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
        </form>

    </div>
</section>

<hr>

<section class="row" id="pedidos">
    
      
    <center>
    <table class="table table-bordered " style="width: 90%">
        <tr class="text-success bg-success">
            <td>Cliente</td>
            <td>Data</td>
            <td class="hiddenonmobile">Ref</td>
            <td>Status</td>
        </tr>
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
        <tr>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_EDITAR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['cli_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['cli_nome'];?>
</a></td>
            <td >
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
?cod_pedido=<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
"><button style="background-color: #FFF;"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value['ped_hora'];?>
</button></a>
            </td>
            <td class="hiddenonmobile"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_ref'];?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'CANCELADO') {?>
             <td><span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
            <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'ENTREGUE') {?>
              <td><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
            <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'SOLICITADO') {?>
              <td><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
            <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'SEPARADO') {?>
              <td><span class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
            <?php } else { ?>
              <td><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</td>
            <?php }?>
        </tr> 
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
      </center>
    
    
</section>
  <!--  paginação inferior   -->
    <section id="pagincao" class="row">
    <center>
    <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

    </center>
    </section><?php }
}
