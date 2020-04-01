<?php
/* Smarty version 3.1.33, created on 2019-07-26 06:41:18
  from 'C:\wamp64\www\Loja-Virtual\view\email_cliente_cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3aa08e2eda31_91194904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd29970e7bfc90eaffff691942042b77109c2e507' => 
    array (
      0 => 'C:\\wamp64\\www\\Loja-Virtual\\view\\email_cliente_cadastro.tpl',
      1 => 1564122674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3aa08e2eda31_91194904 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Olá <?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
 , obrigado por se cadastrar em <?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
</h3>

<p> Cadastro efetuado com sucesso,  para fazer  o login use seu email cadastrado ( <?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
 )
<br>
com a sua senha, sua senha neste momento é ( <?php echo $_smarty_tpl->tpl_vars['SENHA']->value;?>
 )

</p>
<p>
    Para acessar o site e sua conta basta usar este endereço <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
</a>
    
</p><?php }
}
