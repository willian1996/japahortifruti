<?php
/* Smarty version 3.1.33, created on 2019-08-09 00:02:49
  from 'C:\xampp\htdocs\Loja-Virtual-Gaby-Modas\view\cliente_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4ce25983e655_04188369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9566d89e1a4ca79acbe32c375cd6e08b0e95c2f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Loja-Virtual-Gaby-Modas\\view\\cliente_itens.tpl',
      1 => 1565319068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4ce25983e655_04188369 (Smarty_Internal_Template $_smarty_tpl) {
?><br><br>
<h4 class="text-center">Dados do pedido</h4>

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
            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['item_qtd'];?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value['item_nome'];?>
</td>
            <td class="text-right"> R$<?php echo $_smarty_tpl->tpl_vars['P']->value['item_valor'];?>
</td>
            <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_tamanho'];?>
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
                <table class="table table-bordered" style="width: 80%">

                    <tr>

                        <td class="text-danger"> <b>Frete:</b> A calcular...</td>

                        <td class="text-danger"> <b>Total:</b> R$<?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>

<!--                        <td class="text-danger"> <b>Final:</b> R$<?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']+$_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>-->

                    </tr>  


                </table>
             
            </center>
            
        </section>  
                        
                        
              <?php if ($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'] == 'SOLICITADO') {?>          
                         <!--  modos de pagamento e outras informações --> 
        <section class="row">
            <h4 class="text-center"> Deseja cancelar este pedido? </h4>     
            
            <div class="col-md-4">
              
            </div>
            <!-- botao de pagamento  -->
            <div class="col-md-4">
                <center>
                    <form name="deletar" method="post" action="">
                         <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                         <button class="btn btn-danger btn-sm" name="ped_apagar" value="ped_apagar">Cancelar</button>
                    </form> 
                </center>
                
                   
                
            </div>
            <div class="col-md-4">
                
            </div>
         
            <br><br>
        </section>

 <?php }?>



<?php }
}
