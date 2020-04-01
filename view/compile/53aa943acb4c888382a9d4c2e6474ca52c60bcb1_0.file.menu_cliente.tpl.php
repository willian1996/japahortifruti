<?php
/* Smarty version 3.1.33, created on 2019-07-30 13:18:57
  from 'C:\wamp64\www\Loja-Virtual\view\menu_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d406df1950476_28267540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53aa943acb4c888382a9d4c2e6474ca52c60bcb1' => 
    array (
      0 => 'C:\\wamp64\\www\\Loja-Virtual\\view\\menu_cliente.tpl',
      1 => 1564470774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d406df1950476_28267540 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center text-danger"> Olá <b><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b>, seja bem vindo! O que deseja fazer agora?</h4> 
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
