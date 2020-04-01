<br><br>
<h4 class="text-center">Dados do pedido</h4>

<!-- informações sobre o pedido -->
<section class="row">
    
    <center>
    <table class="table table-bordered" style="width: 80%">
        <tr class="bg-success">
            
            <td><b>Data:</b> {$ITENS.1.ped_data}</td>
            
            <td><b>Hora:</b> {$ITENS.1.ped_hora}</td>
            
            <td><b>Ref:</b> {$ITENS.1.ped_ref}</td>
            

            
        </tr>  
        
        
    </table>
    </center>
    
</section>


<!-- listagem dos itens -->
<section class="row" id="listaitens">
    
    <center>
    <table class="table table-bordered" style="width: 80%">
        
        <tr class="text-success bg-success">
            <td></td>
            <td>Item</td>
            <td>Valor Uni</td>
            <td>T</td>
            <td>Sub</td>
        </tr>
        
        {foreach from=$ITENS item=P}
        <tr>
            
            <td><img src="{$P.item_img}" alt=""> </td>
            <td>{$P.item_qtd} {$P.item_nome}</td>
            <td class="text-right"> R${$P.item_valor}</td>
            <td class="text-center"> {$P.item_tamanho}</td>
            <td class="text-right"> R${$P.item_sub}</td>
            
        </tr>
        
        {/foreach}
        
        
    </table>
    </center>
    
    
    
</section>
        
        
        <section class="row" id="resumo">
            <br>
            <center>
                {if $P.ped_pag_status == 'CANCELADO'}
                  <b>Status: </b><span class="label label-danger">{$P.ped_pag_status}</span>
                {elseif $P.ped_pag_status == 'ENTREGUE'}
                  <b>Status: </b><span class="label label-success">{$P.ped_pag_status}</span>
                {elseif $P.ped_pag_status == 'SOLICITADO'}
                  <b>Status: </b><span class="label label-info">{$P.ped_pag_status}</span>
                {elseif $P.ped_pag_status == 'SEPARADO'}
                  <b>Status: </b><span class="label label-warning">{$P.ped_pag_status}</span>
                {else}
                  <b>Status:</b>{$P.ped_pag_status}
                {/if}
            </center>
            <br>

            <center>
                <table class="table table-bordered" style="width: 80%">

                    <tr>

                        <td class="text-danger"> <b>Frete:</b> A calcular...</td>

                        <td class="text-danger"> <b>Total:</b> R${$TOTAL}</td>

<!--                        <td class="text-danger"> <b>Final:</b> R${$ITENS.1.ped_frete_valor+$TOTAL}</td>-->

                    </tr>  


                </table>
             
            </center>
            
        </section>  
                        
                        
              {if $ITENS.1.ped_pag_status =='SOLICITADO'}          
                         <!--  modos de pagamento e outras informações --> 
        <section class="row">
            <h4 class="text-center"> Deseja cancelar este pedido? </h4>     
            
            <div class="col-md-4">
              
            </div>
            <!-- botao de pagamento  -->
            <div class="col-md-4">
                <center>
                    <form name="deletar" method="post" action="">
                         <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
                         <button class="btn btn-danger btn-sm" name="ped_apagar" value="ped_apagar">Cancelar</button>
                    </form> 
                </center>
                
                   
                
            </div>
            <div class="col-md-4">
                
            </div>
         
            <br><br>
        </section>

 {/if}



