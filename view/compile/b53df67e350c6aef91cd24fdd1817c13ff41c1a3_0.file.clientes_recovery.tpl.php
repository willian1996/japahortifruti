<?php
/* Smarty version 3.1.33, created on 2019-07-26 08:21:11
  from 'C:\wamp64\www\Loja-Virtual\view\clientes_recovery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3ab7f7356125_39392538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b53df67e350c6aef91cd24fdd1817c13ff41c1a3' => 
    array (
      0 => 'C:\\wamp64\\www\\Loja-Virtual\\view\\clientes_recovery.tpl',
      1 => 1564129269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3ab7f7356125_39392538 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Digite seu email cadatrado para receber uma nova senha </h4>
<hr>

<form name="recuperarsenha" method="post" action="">
    
    <section>
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <label>Digite seu email cadastrado</label>
          
            <input type="email" name="cli_email" id="cli_email" class="form-control" required>
            <br>
            <button type="submit" class="btn btn-warning btn-block"> Recuperar </button>
        </div>
       
        <div class="col-md-4">
       
            
            
        </div>
        
        
        
    </section>

  
    
</form>
<br><br>
<?php }
}
