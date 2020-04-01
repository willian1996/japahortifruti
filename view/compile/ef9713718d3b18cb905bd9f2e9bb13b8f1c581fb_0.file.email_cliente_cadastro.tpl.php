<?php
/* Smarty version 3.1.33, created on 2019-08-01 20:29:21
  from 'C:\xampp\htdocs\Loja-Virtual-Gaby-Modas\view\email_cliente_cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4375d1b5c824_64396199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef9713718d3b18cb905bd9f2e9bb13b8f1c581fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Loja-Virtual-Gaby-Modas\\view\\email_cliente_cadastro.tpl',
      1 => 1564691744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4375d1b5c824_64396199 (Smarty_Internal_Template $_smarty_tpl) {
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
