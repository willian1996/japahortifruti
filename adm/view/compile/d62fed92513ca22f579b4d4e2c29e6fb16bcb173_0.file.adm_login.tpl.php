<?php
/* Smarty version 3.1.33, created on 2019-08-04 01:50:21
  from 'C:\xampp\htdocs\Loja-Virtual-Gaby-Modas\adm\view\adm_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d46640d75c0b4_16578286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd62fed92513ca22f579b4d4e2c29e6fb16bcb173' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Loja-Virtual-Gaby-Modas\\adm\\view\\adm_login.tpl',
      1 => 1564894219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d46640d75c0b4_16578286 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html>
    <head>
        <title>Area restrita </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery-2.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- meu aquivo pessoal de CSS-->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/tema.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color: #F60C89">
        
        <section class="container" >
            
            
            <section class="row" id="section_login_adm">
                
                <div class="col-md-4"></div>    
               
                <div class="col-md-4 thumbnail" id="bloco_login_adm">
                 
                    <h4 class="text-center"> Área restrita </h4>
               
                    
                    <form name="login" method="post" action="">
                        
                        <label>Email:</label>
                        <input type="email" name="txt_email" class="form-control" required autocomplete="off">
                        
                        
                        <label>Senha:</label>
                        <input type="password" name="txt_senha" class="form-control" required>
                        
                        <br>
                        <br>
                        <button class="btn btn-success btn-block btn-lg" name="txt_logar" value="txt_logar"> Entrar </button>
                        <br>
                        
                          
                        
                    </form>
                    
                    <!-- botão senha recovery --->
                    <br>
                    <center><button class="btn btn-danger" data-toggle="collapse" data-target="#recovery"> Esqueci a senha </button></center>
                    
                    <div class="alert alert-danger collapse" id="recovery">
                    
                        <form name="recovery" method="post" action="">
                            <label>Digite o email do administrador </label>
                            <input type="email" name="txt_email" class="form-control" required>
                            <button class="btn btn-success" name="recovery" value="recovery">Solicitar senha</button>
                            
                        </form> 
                        
                    </div>
                    
                </div>    
              
                <div class="col-md-4"></div>    
                
                
            </section>
            
            
            
        </section>
        
        
    </body>
</html>
<?php }
}
