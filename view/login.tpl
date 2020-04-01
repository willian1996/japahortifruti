 
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

                <a href="{$PAG_CADASTRO}#cadcliente" class="btn btn-default "><i class="glyphicon glyphicon-pencil"></i> Me Cadastrar</a>


                <a href="{$PAG_RECOVERY}" class="btn btn-default "><i class="glyphicon glyphicon-question-sign"></i> Esqueci a Senha</a>




            </div>


        </div><!-- fim dos campos --->


        <div class="col-md-4 text-center"> 


        </div>

    </form>


</section>


