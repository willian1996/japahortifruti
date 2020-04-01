<h2 class="text-center"> Gerenciar Pedidos </h2> 
<hr>

<section class="row" id="pesquisa">
    <div class="espacamento">
        <!---  faz  uma busca entre datas --->
        <label> Buscar entre datas</label>
        <form name="buscardata" method="post" action="">
            <div class="col-md-3">            
                <input type="date" name="data_ini" class="form-control" required>
            </div> 
            <div class="col-md-3"> 
                <input type="date" name="data_fim" class="form-control" required>
            </div> 
            <div class="col-md-3"> 
                <button class="btn btn-success"> Buscar </button>
            </div> 
            <div class="col-md-3">    
            </div> 
        </form>
    </div>
</section>

<br>

<section class="row">    
    <div class="espacamento">
        <!--- faz  uma busca  por texto ---> 
        <label> Buscar por Referencia</label>
        <form name="buscarrefcod" method="post" action="">  
            <div class="col-md-3">
                <input type="text" name="txt_ref" class="form-control" required>   
            </div>
            <div class="col-md-3">
                <button class="btn btn-success"> Buscar </button>   
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
        </form>

    </div>
</section>

<hr>

<section class="row" id="pedidos">
    
      
    <center>
    <table class="table table-bordered " style="width: 90%">
        <tr class="text-success bg-success">
            <td>Cliente</td>
            <td>Data</td>
            <td class="hiddenonmobile">Ref</td>
            <td>Status</td>
        </tr>
        
        {foreach from=$PEDIDOS item=P}
        <tr>
            <td><a href="{$PAG_EDITAR}/{$P.cli_id}">{$P.cli_nome}</a></td>
            <td >
                <a href="{$PAG_ITENS}?cod_pedido={$P.ped_cod}"><button style="background-color: #FFF;">{$P.ped_data} {$P.ped_hora}</button></a>
            </td>
            <td class="hiddenonmobile">{$P.ped_ref}</td>
            {if $P.ped_pag_status == 'CANCELADO'}
             <td><span class="label label-danger">{$P.ped_pag_status}</span></td>
            {elseif $P.ped_pag_status == 'ENTREGUE'}
              <td><span class="label label-success">{$P.ped_pag_status}</span></td>
            {elseif $P.ped_pag_status == 'SOLICITADO'}
              <td><span class="label label-info">{$P.ped_pag_status}</span></td>
            {elseif $P.ped_pag_status == 'SEPARADO'}
              <td><span class="label label-warning">{$P.ped_pag_status}</span></td>
            {else}
              <td>{$P.ped_pag_status}</td>
            {/if}
        </tr> 
        {/foreach}
    </table>
      </center>
    
    
</section>
  <!--  paginação inferior   -->
    <section id="pagincao" class="row">
    <center>
    {$PAGINAS}
    </center>
    </section>