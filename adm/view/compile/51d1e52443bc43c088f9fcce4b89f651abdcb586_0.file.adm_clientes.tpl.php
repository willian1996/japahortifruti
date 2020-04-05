<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-03 21:53:54
  from 'C:\wamp64\www\japahortifruti\adm\view\adm_clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e87daa2cce5f0_63047807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51d1e52443bc43c088f9fcce4b89f651abdcb586' => 
    array (
      0 => 'C:\\wamp64\\www\\japahortifruti\\adm\\view\\adm_clientes.tpl',
      1 => 1565323612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e87daa2cce5f0_63047807 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="text-center">Gerenciar Clientes </h2>
<hr> 

<!--- listando clientes ---->
<section class="row">    
    <div >
        <!--- faz  uma busca  por texto ---> 
        <label> Buscar por nome ou Whatsapp</label>
        <form name="buscarpornome" method="get" action="">  
            <div class="col-md-3">
                <input type="text" name="txt_nome" class="form-control" required>   
            </div>
            <div class="col-md-3">
                <button class="btn btn-success"> Buscar </button>   
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
        </form>

    </div>
</section>
<section class="row">
    
    <center>
        <p>Clique no nome para ver os dados do cliente</p>
    <table class="table table-bordered">
    
        
        <tr class="text-success bg-success">
            
            <td>Nome</td>
            <td>Whatsapp </td>
            <td></td> 
        </tr>
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLIENTES']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
        
        <tr>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_EDITAR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
</a></td>
            <td><a class="linkvisualizado" href="https://wa.me/55<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_celular'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_celular'];?>
</a></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDOS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
 ">Pedidos</a> </td>
        </tr>
        
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </table>
    </center >
    
</section>

  <!--  paginação inferior   -->
    <section id="pagincao" class="row">
    <center>
    <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

    </center>
    </section>

<?php }
}
