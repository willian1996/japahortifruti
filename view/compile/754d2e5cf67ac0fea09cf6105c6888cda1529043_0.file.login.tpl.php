<?php
/* Smarty version 3.1.33, created on 2019-07-19 20:27:16
  from 'C:\wamp64\www\Loja-Virtual\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3227a4c21ca0_43685564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '754d2e5cf67ac0fea09cf6105c6888cda1529043' => 
    array (
      0 => 'C:\\wamp64\\www\\Loja-Virtual\\view\\login.tpl',
      1 => 1563491815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3227a4c21ca0_43685564 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <section class="row" id="fazerlogin">
        
        

        <form name="cliente_login" method="post" action="" >     

            <div class="col-md-4 text-center">
                <h2>Entrar</h2>


            </div>
            <!---  aqui estão os campos -->
            <div class="col-md-4">


                <div class="form-group"> 
                    <label> Email: </label>
                    <input type="email"  class="form-control " name="txt_email" value="" placeholder="Digite seu email" required autocomplete="off">        

                </div>


                <div class="form-group"> 
                     <label> Senha: </label>
                     <input type="password"  class="form-control " name="txt_senha" value="" placeholder="Digite sua senha" required>        

                </div>


                <div class="form-group"> 

                    <button class="btn btn-success btn-block btn-lg"><i class="glyphicon glyphicon-log-in"></i> Entrar </button>




                </div>
                <div class="form-group"> 

                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
" class="btn btn-default "><i class="glyphicon glyphicon-pencil"></i> Me Cadastrar</a>


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
