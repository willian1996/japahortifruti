<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-06 13:01:47
  from 'C:\wamp64\www\japahortifruti\view\cliente_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8b526baf0082_04775448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40e95e9841b29dd8eea74622cf9da902fe25673c' => 
    array (
      0 => 'C:\\wamp64\\www\\japahortifruti\\view\\cliente_senha.tpl',
      1 => 1564691744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8b526baf0082_04775448 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 id="clientesenha" class="text-center">Alteração de senha de acesso</h3>


<form name="alterarsenha" method="post" action="">

    <section>
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <label>Digite sua senha atual</label>

            <input type="password" name="cli_senha_atual" id="cli_senha_atual" class="form-control" required>



            <label>Digite sua nova senha</label>

            <input type="password" name="cli_senha" id="cli_senha" class="form-control" required>
            <br>



            <button type="submit" class="btn btn-success btn-block"> Alterar </button>
        </div>

        <div class="col-md-4">



        </div>



    </section>






</form>
<br>
<br>
<?php }
}
