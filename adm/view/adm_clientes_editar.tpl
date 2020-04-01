<br> 
<div>
    <form name="cadcliente" class="well form-horizontal" action="" method="post">

        <fieldset>

            <!-- Form Name -->
            <center>
            <h3 id="meusdados">{$CLI_NOME} </h3>
            </center>
            <br>
            <!-- Nome-->

            <div class="form-group">
              <label class="col-md-4 control-label">Nome</label>
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" value="{$CLI_NOME}" name="cli_nome" class="form-control" minlength="3" required>
                </div>
              </div>
            </div>



            <!-- CPF-->

            <div class="form-group">
              <label class="col-md-4 control-label" >CPF</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" value="{$CLI_CPF}" name="cli_cpf" class="form-control" minlength="11" maxlength="11">
                </div>
              </div>
            </div>

            <!-- Whatsapp-->

            <div class="form-group">
              <label class="col-md-4 control-label">Whatsapp</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input type="number" value="{$CLI_CELULAR}" name="cli_celular" class="form-control" required maxlength="11" min="11111111111">
                </div>
              </div>
            </div>

            <!-- Telefone-->

            <div class="form-group">
              <label class="col-md-4 control-label">Telefone</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input type="number" value="{$CLI_FONE}" name="cli_fone" class="form-control" maxlength="11">
                </div>
              </div>
            </div>



            <!-- Rua-->
            <div class="form-group">
              <label class="col-md-4 control-label">Rua</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input type="text" value="{$CLI_ENDERECO}" name="cli_endereco" class="form-control"  minlength="3" required>
                </div>
              </div>
            </div>

            <!-- Numero-->
            <div class="form-group">
              <label class="col-md-4 control-label">Numero</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input type="text" value="{$CLI_NUMERO}" name="cli_numero" class="form-control" required>
                </div>
              </div>
            </div>

            <!--            Ponto de Referencia-->
            <div class="form-group">
              <label class="col-md-4 control-label">Ponto de Referência</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
              <input type="text" placeholder="Próximo de..." value="{$CLI_PONTO_REFERENCIA}" name="cli_ponto_referencia"  class="form-control" minlength="5">
                </div>
              </div>
            </div>

            <!-- Bairro-->
            <div class="form-group">
              <label class="col-md-4 control-label">Bairro</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input type="text" value="{$CLI_BAIRRO}" name="cli_bairro" class="form-control" minlength="3" required>
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
                    <option value="Caraguatatuba" {if {$CLI_CIDADE} == 'Caraguatatuba'}selected="selected"{/if}>Caraguatatuba</option>
                    <option value="Sao Sebastiao" {if {$CLI_CIDADE} == 'Sao Sebastiao'}selected="selected"{/if}>São Sebastião</option>
                    <option value="Ubatuba" {if {$CLI_CIDADE} == 'Ubatuba'}selected="selected"{/if}>Ubatuba</option>
                    <option value="Ilhabela" {if {$CLI_CIDADE} == 'Ilhabela'}selected="selected"{/if}>Ilhabela</option>
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
              <input type="number" value="{$CLI_CEP}" name="cli_cep" class="form-control" minlength="8" maxlength="8">
                </div>
            </div>
            </div>


           
            <!-- Senha-->
            <div class="form-group">
              <label class="col-md-4 control-label">Troque a senha só se o cliente pedir</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" placeholder="Nova senha" name="txt_senha" class="form-control">
                </div>
              </div>
            </div>
            
            
            <div class="form-group">
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <input type="hidden" name="cli_id" value="{$CLI_ID}" class="form-control">
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

