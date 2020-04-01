<hr>
<!--  table listagem de itens -->
<section id="tabelafinalizar" class="row ">
    
    

    <center>
        <script>alert("Pedido Finalizado com Sucesso!");</script>
        <div class="alert alert-success">
        Pedido Finalizado com Sucesso!
        </div>
        <div class="alert alert-info">
        Em breve entraremos em contato pelo Whatsapp para confirmar este pedido e informar o valor do frete.
        </div>
        <div class="alert alert-warning">
        Atenção pagamento será feito no momento da entrega! aceitamos cartões
        </div>
        <br>
        <h4>Resumo do seu pedido</h4>
    <table class="table table-bordered" style="width: 95%">

 
        
        <tr class="text-danger bg-danger">
            <td></td>
            <td>Produto</td>
            <td>Valor R$</td>
            <td>T</td>
            <td>Sub Total R$</td>
        </tr>


       {foreach from=$PRO item=P}

        <tr>

            <td> <img src="{$P.pro_img}" alt="{$P.pro_img}"> </td>
            <td><strong>{$P.pro_qtd}</strong> {$P.pro_nome} </td>
            <td> {$P.pro_valor} </td>
            <td> {$P.pro_tamanho} </td>
            <td> {$P.pro_subTotal}</td>



        </tr>
        {/foreach}


    </table>

    </center>


</section><!-- fim da listagem itens -->

        <!-- botoes de baixo e valor total -->
        <section class="row" id="total">

            <div class="col-md-4 text-right">

            </div>

            <div class="col-md-12 text-right text-danger bg-warning">
            <h4>
               Total : R$ {$TOTAL}
            </h4>
                <h4>
               Frete : A calcular...
            </h4>
                <hr>
<!--
            <h4>
               Total do Pedido : R$ {$TOTAL_FRETE}
            </h4>
-->
            </div>


        </section>

<section class="row">
           
            

            <!-- botao de pagamento  -->
            <div class="col-md-4">




                


<!--                   <script type="text/javascript" src="{$PS_SCRIPT}"></script>-->

            </div>
            <div class="col-md-4">
                <br>
                <img width="100%" src="{$TEMA}/imagens/banner_cartao.jpg" alt="">
                <br>
            </div>

            <div class="col-md-4">

            </div>


</section>

<section class="row">
     <br><hr>
    <center>
        <a  href="{$PAG_MINHA_CONTA}#tabelapedidos"><button class="btn btn-success btn-lg">Ver meus pedidos</button></a>
    </center>


</section>

                    <br>
                    <hr>

       <br>
       <br>
       <br>
       <br>
