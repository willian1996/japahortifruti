<br><br>
<section class="row" id="pedidos">

    <h4 class="text-center">Meus Pedidos</h4>

    <center>
    {if $PEDIDOS_QUANTIDADE > 0}
    <table id="tabelapedidos" class="table table-bordered" style="width: 90%">

        <tr class="text-danger bg-danger">
            <td>Data</td>
            <td>Hora</td>
            <td class="hiddenonmobile">Ref</td>
            <td>Status</td>
            <td></td>
        </tr>

        {foreach from=$PEDIDOS item=P}
        <tr>

            <td style="width: 10%">{$P.ped_data}</td>
            <td style="width: 10%">{$P.ped_hora}</td>
            <td class="hiddenonmobile" style="width: 10%">{$P.ped_ref}</td>


            {if $P.ped_pag_status == 'CANCELADO'}
             <td style="width: 10%;"><span class="label label-danger">{$P.ped_pag_status}</span></td>
            {elseif $P.ped_pag_status == 'ENTREGUE'}
              <td style="width: 10%;"><span class="label label-success">{$P.ped_pag_status}</span></td>
            {elseif $P.ped_pag_status == 'SOLICITADO'}
              <td style="width: 10%;"><span class="label label-info">{$P.ped_pag_status}</span></td>
            {elseif $P.ped_pag_status == 'SEPARADO'}
              <td style="width: 10%;"><span class="label label-warning">{$P.ped_pag_status}</span></td>
            {else}
              <td style="width: 10%;">{$P.ped_pag_status}</td>
            {/if}

        <form name="itens" method="post" action="{$PAG_ITENS}">

             <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
             <td style="width: 15%;"><center><button class="btn btn-default">Ver</button></center></td>

        </form>

        </tr>
        
        
        
        {/foreach}

    </table>
        {else}
         <p>Você ainda não tem pedidos!</p><br>
        {/if}
      </center>


</section>

  <!--  paginação inferior   -->
    <section id="pagincao" class="row">
    <center>
    {$PAGINAS}
    </center>
    </section>
