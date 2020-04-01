<?php
/* Smarty version 3.1.33, created on 2019-08-16 04:13:46
  from 'C:\wamp64\www\Loja-Virtual-Gaby-Modas\view\menu_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5657aa62db27_12771128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5e28485985657bf3e63d3ef27b3cc7e94ac379b' => 
    array (
      0 => 'C:\\wamp64\\www\\Loja-Virtual-Gaby-Modas\\view\\menu_cliente.tpl',
      1 => 1565248518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5657aa62db27_12771128 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center text-danger"> Olá <b><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b><br> O que deseja fazer agora?</h4> 
<section class="row" id="minhaconta">
    
    <div class="text-center">
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
#minhaconta" class="btn btn-success"><i class="glyphicon glyphicon-home"></i> Minha Conta</a>
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_PEDIDOS']->value;?>
#tabelapedidos" class="btn btn-success"><i class="glyphicon glyphicon-barcode"></i> Meus Pedidos</a>
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_DADOS']->value;?>
#meusdados" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Meus Dados </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
#tabelacarrinho" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Meu Carrinho </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_SENHA']->value;?>
#clientesenha" class="btn btn-warning"> Alterar Senha </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a>
     
        

        
    </div>
    
    
    
    
    
</section>
<?php }
}
