
    <form name="cadcliente" class="well form-horizontal" action="" method="post"  id="cadcliente">

        <fieldset>

            <!-- Form Name -->
            <legend>Cadastre-se</legend>

            <!-- Nome-->

            <div class="form-group">
              <label class="col-md-4 control-label">Nome</label>
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" placeholder="Digite seu nome" name="cli_nome" class="form-control" minlength="3" required>
                </div>
              </div>
            </div>

            <!-- Sobrenome-->

            <div class="form-group">
              <label class="col-md-4 control-label" >Sobrenome</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" placeholder="Digite seu sobrenome" name="cli_sobrenome" class="form-control"  minlength="3" required>
                </div>
              </div>
            </div>

            <!-- CPF-->

            <div class="form-group">
              <label class="col-md-4 control-label" >CPF</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" placeholder="Digite seu CPF" name="cli_cpf" class="form-control" min="11111111111" maxlength="11" required>
                </div>
              </div>
            </div>

            <!-- Whatsapp-->

            <div class="form-group">
              <label class="col-md-4 control-label">Whatsapp</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
              <input type="number" placeholder="Whatsapp com o DDD" name="cli_celular" class="form-control" maxlength="11" min="11111111111"  required>
                </div>
              </div>
            </div>

            <!-- Telefone-->

            <div class="form-group">
              <label class="col-md-4 control-label">Telefone</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input type="number" placeholder="Ou celular para recado" name="cli_fone" class="form-control">
                </div>
              </div>
            </div>



            <!-- Rua-->
            <div class="form-group">
              <label class="col-md-4 control-label">Rua</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
                    <input type="text" placeholder="Digite a sua rua ou avenida" name="cli_endereco" class="form-control"  minlength="3" required>
                </div>
              </div>
            </div>

            <!-- Numero-->
            <div class="form-group">
              <label class="col-md-4 control-label">Numero</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input type="text" placeholder="Digite o numero da casa" name="cli_numero" class="form-control" required>
                </div>
              </div>
            </div>

            <!--            Ponto de Referencia-->
            <div class="form-group">
              <label class="col-md-4 control-label">Ponto de Referência</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
              <input type="text" placeholder="Próximo de..." name="cli_ponto_referencia"  class="form-control" minlength="3" required>
                </div>
              </div>
            </div>


            <!-- Bairro-->
            <div class="form-group">
              <label class="col-md-4 control-label">Bairro</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input type="text" placeholder="Digite o seu bairro" name="cli_bairro" class="form-control" minlength="3" required>
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
                    <option value="Sao Sebastiao">São Sebastião</option>
                    <option value="Ilhabela">Ilhabela</option>
                    <option value="Caraguatatuba">Caraguatatuba</option>
                    <option value="Ubatuba">Ubatuba</option>
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
              <input type="text" placeholder="Opcional" name="cli_cep" class="form-control">
                </div>
            </div>
            </div>


            <!-- E-Mail-->
<!--
            <div class="form-group">
              <label class="col-md-4 control-label">E-Mail</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input type="email" placeholder="Digite o seu e-mail" name="cli_email" class="form-control" required>
                </div>
              </div>
            </div>
-->
            
            <!-- Senha-->
            <div class="form-group">
              <label class="col-md-4 control-label">Nova Senha</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" placeholder="No minimo 8 caracteres" name="senha" class="form-control" required>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-4 control-label">Redigite a senha</label>
                <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" placeholder="Confirme a senha" name="cli_senha" class="form-control" required>
                </div>
              </div>
            </div>




            <!-- Success message -->
            <div class="alert alert-success" role="alert" id="success_message">Sucesso <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label"></label>
              <div class="col-md-4">
                  <center>
                <button type="submit" class="btn btn-success" >Cadastrar <span class="glyphicon glyphicon-send"></span></button>
                  </center>
              </div>
            </div>

        </fieldset>
    </form>

