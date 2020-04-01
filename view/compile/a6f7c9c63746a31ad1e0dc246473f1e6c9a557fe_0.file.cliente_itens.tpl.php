<?php
/* Smarty version 3.1.33, created on 2019-07-30 03:35:56
  from 'C:\wamp64\www\Loja-Virtual\view\cliente_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3fe54ced00c5_06612247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6f7c9c63746a31ad1e0dc246473f1e6c9a557fe' => 
    array (
      0 => 'C:\\wamp64\\www\\Loja-Virtual\\view\\cliente_itens.tpl',
      1 => 1564468555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3fe54ced00c5_06612247 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Dados do pedido</h4>

<!-- informações sobre o pedido -->
<section class="row">
    
    <center>
    <table class="table table-bordered" style="width: 80%">
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


<!-- listagem dos itens -->
<section class="row" id="listaitens">
    
    <center>
    <table class="table table-bordered" style="width: 80%">
        
        <tr class="text-success bg-success">
            <td></td>
            <td>Item</td>
            <td>Valor Uni</td>
            <td>X</td>
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
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_nome'];?>
</td>
            <td class="text-right"> R$<?php echo $_smarty_tpl->tpl_vars['P']->value['item_valor'];?>
</td>
            <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_qtd'];?>
</td>
            <td class="text-right"> R$<?php echo $_smarty_tpl->tpl_vars['P']->value['item_sub'];?>
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

            <center>
                <table class="table table-bordered" style="width: 80%">

                    <tr>

                        <td class="text-danger"> <b>Frete:</b> R$<?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor'];?>
</td>

                        <td class="text-danger"> <b>Total:</b> R$<?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>

                        <td class="text-danger"> <b>Final:</b> R$<?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']+$_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>

                    </tr>  


                </table>
             
            </center>
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
        </section>  
                        
                        
              <?php if ($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'] == 'NAO') {?>          
                         <!--  modos de pagamento e outras informações --> 
        <section class="row">
            <h3 class="text-center"> Formas de pagamento </h3>     
            
            <div class="col-md-4">
              
            </div>
            <!-- botao de pagamento  -->
            <div class="col-md-4">
               
                BOTÃO DE PAGAMENTO
                
                
                   <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png"  alt=""> 
                   <?php echo '<script'; ?>
 type="text/javascript" src=""><?php echo '</script'; ?>
>
                
            </div>
            <div class="col-md-4">
                
            </div>
         
            
        </section>

 <?php }?>

<?php }
}
