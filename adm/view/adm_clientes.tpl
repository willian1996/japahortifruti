<h2 class="text-center">Gerenciar Clientes </h2>
<hr> 

<!--- listando clientes ---->
<section class="row">    
    <div >
        <!--- faz  uma busca  por texto ---> 
        <label> Buscar por nome ou Whatsapp</label>
        <form name="buscarpornome" method="get" action="">  
            <div class="col-md-3">
                <input type="text" name="txt_nome" class="form-control" required>   
            </div>
            <div class="col-md-3">
                <button class="btn btn-success"> Buscar </button>   
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
        </form>

    </div>
</section>
<section class="row">
    
    <center>
        <p>Clique no nome para ver os dados do cliente</p>
    <table class="table table-bordered">
    
        
        <tr class="text-success bg-success">
            
            <td>Nome</td>
            <td>Whatsapp </td>
            <td></td> 
        </tr>
        
        {foreach from=$CLIENTES item=C}
        
        <tr>
            <td><a href="{$PAG_EDITAR}/{$C.cli_id}">{$C.cli_nome}</a></td>
            <td><a class="linkvisualizado" href="https://wa.me/55{$C.cli_celular}">{$C.cli_celular}</a></td>
            <td><a href="{$PAG_PEDIDOS}/{$C.cli_id} ">Pedidos</a> </td>
        </tr>
        
        {/foreach}
        
    </table>
    </center >
    
</section>

  <!--  paginação inferior   -->
    <section id="pagincao" class="row">
    <center>
    {$PAGINAS}
    </center>
    </section>

