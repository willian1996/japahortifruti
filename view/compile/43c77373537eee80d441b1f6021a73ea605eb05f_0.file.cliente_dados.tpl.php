<?php
/* Smarty version 3.1.33, created on 2019-08-16 04:13:47
  from 'C:\wamp64\www\Loja-Virtual-Gaby-Modas\view\cliente_dados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5657ab94be91_00567326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43c77373537eee80d441b1f6021a73ea605eb05f' => 
    array (
      0 => 'C:\\wamp64\\www\\Loja-Virtual-Gaby-Modas\\view\\cliente_dados.tpl',
      1 => 1565321604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5657ab94be91_00567326 (Smarty_Internal_Template $_smarty_tpl) {
?><br>  
<div>
    <form name="cadcliente" class="well form-horizontal" action="" method="post"  id="cadcliente">

        <fieldset>

            <!-- Form Name -->
            <center>
            <h3 id="meusdados">Meus Dados</h3>
            </center>
            <br>
            <center><p style="color: red;">Cadastrado em <?php echo date('d/m/y H:i',strtotime($_smarty_tpl->tpl_vars['CLI_DATA_CAD']->value));?>
</p> </center>
            <br>
            <!-- Nome-->

            <div class="form-group">
              <label class="col-md-4 control-label">Nome</label>
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NOME']->value;?>
" name="cli_nome" class="form-control" minlength="3" required>
                </div>
              </div>
            </div>



            <!-- CPF-->

            <div class="form-group">
              <label class="col-md-4 control-label" >CPF</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CPF']->value;?>
" name="cli_cpf" class="form-control" minlength="11" maxlength="11" required>
                </div>
              </div>
            </div>

            <!-- Whatsapp-->

            <div class="form-group">
              <label class="col-md-4 control-label">Whatsapp</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CELULAR']->value;?>
" name="cli_celular" class="form-control" required maxlength="11" min="11111111111">
                </div>
              </div>
            </div>

            <!-- Telefone-->

            <div class="form-group">
              <label class="col-md-4 control-label">Telefone</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_FONE']->value;?>
" name="cli_fone" class="form-control" required maxlength="11">
                </div>
              </div>
            </div>



            <!-- Rua-->
            <div class="form-group">
              <label class="col-md-4 control-label">Rua</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_ENDERECO']->value;?>
" name="cli_endereco" class="form-control"  minlength="3" required>
                </div>
              </div>
            </div>

            <!-- Numero-->
            <div class="form-group">
              <label class="col-md-4 control-label">Numero</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NUMERO']->value;?>
" name="cli_numero" class="form-control" required>
                </div>
              </div>
            </div>

            <!--            Ponto de Referencia-->
            <div class="form-group">
              <label class="col-md-4 control-label">Ponto de Referência</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
              <input type="text" placeholder="Próximo de..." value="<?php echo $_smarty_tpl->tpl_vars['CLI_PONTO_REFERENCIA']->value;?>
" name="cli_ponto_referencia"  class="form-control" minlength="5" required>
                </div>
              </div>
            </div>
 
            <!-- Bairro-->
            <div class="form-group">
              <label class="col-md-4 control-label">Bairro</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_BAIRRO']->value;?>
" name="cli_bairro" class="form-control" minlength="3" required>
                </div>
              </div>
            </div>

            <!-- Cidade -->

            <div class="form-group">
              <label class="col-md-4 control-label">Cidade</label>
                <div class="col-md-4 selectContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <select name="cli_cidade" class="form-control selectpicker" required>
                    <option value="">selecione sua cidade</option>
                    <option value="Caraguatatuba" <?php ob_start();
echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 'Caraguatatuba') {?>selected="selected"<?php }?>>Caraguatatuba</option>
                    <option value="Sao Sebastiao" <?php ob_start();
echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 'Sao Sebastiao') {?>selected="selected"<?php }?>>São Sebastião</option>
                    <option value="Ilhabela" <?php ob_start();
echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 'Ilhabela') {?>selected="selected"<?php }?>>Ilha Bela</option>
                </select>
              </div>
            </div>
            </div>

            <!-- CEP-->

            <div class="form-group">
              <label class="col-md-4 control-label">CEP</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
              <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CEP']->value;?>
" name="cli_cep" class="form-control" minlength="8" maxlength="8" required>
                </div>
            </div>
            </div>


      
            <br><hr>
            <!-- Senha-->
            <div class="form-group">
              <label class="col-md-4 control-label">Digite sua senha atual por segurança<br>(<small>sua senha não será alterada</small>)</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" name="txt_senha" id="cli_senha" class="form-control" required>
                </div>
              </div>
            </div>




            <!-- Success message -->
            <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label"></label>
              <div class="col-md-4">
                <button type="submit" class="btn btn-success" >Atualizar cadastro <span class="glyphicon glyphicon-send"></span></button>
              </div>
            </div>

        </fieldset>
    </form>
</div><!-- /.container -->
<br><br>

<?php }
}
