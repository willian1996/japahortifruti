
<div>
    <form class="well form-horizontal" action="envio" method="post"  id="contact_form">
        <fieldset>

        <!-- Form Name -->
        <legend id="contato">Contate-nos</legend>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Nome</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  name="txtinputnome" id="txtinputnome" placeholder="Digite seu nome completo" class="form-control"  type="text" required>
                </div>
            </div>
        </div>


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label">E-Mail</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input name="txtinputemail" id="txtinputemail" placeholder="Digite seu e-mail mais usado" class="form-control"  type="text" required>
                </div>
            </div>
        </div>


        <!-- Text input-->
        <!--
        <div class="form-group">
            <label class="col-md-4 control-label">Whatsapp</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input name="phone" placeholder="(00)5555-1212" class="form-control" type="text" required>
                </div>
            </div>
        </div>

        -->

        <!-- Text area -->

        <div class="form-group">
            <label class="col-md-4 control-label">Mensagem</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                    <textarea class="form-control" name="txtinputmensagem" id="txtinputmensagem" placeholder="Digite sua mensagem"></textarea>
                </div>
            </div>
        </div>

        <!-- Success message -->
        <div class="alert alert-success" role="alert" id="success_message">
            Sucesso <i class="glyphicon glyphicon-thumbs-up"></i>
            Obrigado por nos contactar, entraremos em contato com você em breve.
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
                <button type="submit" class="btn btn-warning" >Enviar <span class="glyphicon glyphicon-send"></span></button>
            </div>
        </div>
        </fieldset>
    </form>
</div><!-- /.container -->
