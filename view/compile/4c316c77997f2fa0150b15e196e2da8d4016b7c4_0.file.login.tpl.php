<?php
/* Smarty version 3.1.33, created on 2019-10-07 05:18:51
  from 'C:\wamp64\www\japahortifruti\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9af4eb6d1c62_06796482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c316c77997f2fa0150b15e196e2da8d4016b7c4' => 
    array (
      0 => 'C:\\wamp64\\www\\japahortifruti\\view\\login.tpl',
      1 => 1565247128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9af4eb6d1c62_06796482 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<section class="row" id="fazerlogin">



    <form name="cliente_login" method="post" action="">     

        <div class="col-md-4 text-center">
            <h2>Entrar</h2>


        </div>
        <!---  aqui estão os campos -->
        <div class="col-md-4">


            <div class="form-group"> 
                <label> Whatsapp: </label>
                <input type="number" placeholder="Com o DDD sem o zero" name="txt_celular" class="form-control" max="99999999999" min="11111111111"  required>

            </div>



            <div class="form-group"> 
                 <label> Senha: </label>
                 <input type="password" placeholder="Digite sua senha" name="txt_senha" class="form-control" required>       

            </div>


            <div class="form-group"> 

                <button class="btn btn-success btn-block btn-lg"><i class="glyphicon glyphicon-log-in"></i> Entrar </button>




            </div>
            <div class="form-group"> 

                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
#cadcliente" class="btn btn-default "><i class="glyphicon glyphicon-pencil"></i> Me Cadastrar</a>


                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_RECOVERY']->value;?>
" class="btn btn-default "><i class="glyphicon glyphicon-question-sign"></i> Esqueci a Senha</a>




            </div>


        </div><!-- fim dos campos --->


        <div class="col-md-4 text-center"> 


        </div>

    </form>


</section>


<?php }
}
