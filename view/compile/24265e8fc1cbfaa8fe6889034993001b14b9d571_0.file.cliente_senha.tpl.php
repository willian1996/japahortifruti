<?php
/* Smarty version 3.1.33, created on 2019-08-05 04:19:29
  from 'C:\xampp\htdocs\Loja-Virtual-Gaby-Modas\view\cliente_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d47d881e64101_31459383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24265e8fc1cbfaa8fe6889034993001b14b9d571' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Loja-Virtual-Gaby-Modas\\view\\cliente_senha.tpl',
      1 => 1564691744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d47d881e64101_31459383 (Smarty_Internal_Template $_smarty_tpl) {
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
