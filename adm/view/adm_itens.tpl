<h3 class="text-center">Dados do Pedido</h3> 

<!-- informações sobre o pedido -->
<section class="row">
    <center>
    <table class="table table-bordered" style="width: 100%">
        <tr class="bg-success">
            <td><b>Data:</b> {$ITENS.1.ped_data}</td>
            <td><b>Hora:</b> {$ITENS.1.ped_hora}</td>
            <td><b>Ref:</b> {$ITENS.1.ped_ref}</td>
        </tr>  
    </table>
    </center>
</section>

<!-- listagem dos itens --->
<section class="row" id="listaitens">
    <center>
    <table class="table table-bordered" style="width: 100%">
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
            <td><a href="{$PRO_INFO}/{$P.item_produto}#nomeproduto">{$P.item_qtd} {$P.item_nome}</a></td>
            <td class="text-right"> {$P.item_valor}</td>
            <td class="text-center"> {$P.item_tamanho}</td>
            <td class="text-right"> {$P.item_sub}</td>
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
        <table class="table table-bordered" style="width: 100%">
            <tr>
                <td class="text-danger"> <b>Frete:</b> R${$ITENS.1.ped_frete_valor}</td>
                <td class="text-danger"> <b>Total:</b> R${$TOTAL}</td>
<!--                <td class="text-danger"> <b>Final:</b> R${$ITENS.1.ped_frete_valor+$TOTAL}</td>-->
            </tr> 
        </table>
    </center>
    
    <br><hr>
    <center>
        <h4>Mudar Status do Pedido</h4>
        <form method="post" action="">
            <select name="ped_status">
                <option value="SOLICITADO" {if {$P.ped_pag_status} == 'SOLICITADO'}selected="selected"{/if}>SOLICITADO</option>
                <option value="SEPARADO" {if {$P.ped_pag_status} == 'SEPARADO'}selected="selected"{/if}>SEPARADO</option>
                <option value="ENTREGUE" {if {$P.ped_pag_status} == 'ENTREGUE'}selected="selected"{/if}>ENTREGUE</option>
                <option value="CANCELADO" {if {$P.ped_pag_status} == 'CANCELADO'}selected="selected"{/if}>CANCELADO</option>
            </select>
            <br><br>
            <button name="mudar_status" class="btn btn-danger btn-sm">Mudar</button>
        </form>
    </center>
</section>

<br>
<hr>    

    <h3 class="text-center">Dados do Cliente</h3>
<section>
    
    <center>
        <table class="table table-bordered" style="width: 100%">
            {foreach from=$PEDIDOS item=C}
              <tr>
                <td style="width: 20%;" class="bg-info"><b>Nome</b></td>
                <td><a href="{$PAG_EDITAR}/{$C.cli_id}">{strtoupper($C.cli_nome)}</a></td>
              </tr>
              <tr>
                <td class="bg-info"><b>CPF</b></td>
                <td>{$C.cli_cpf}</td>
              </tr>
              <tr>
                <td class="bg-info"><b>Whatsapp</b></td>
                <td><a href="https://wa.me/55{$C.cli_celular}">{$C.cli_celular}</a></td>
              </tr>
              <tr>
                <td class="bg-info"><b>Telefone</b></td>
                <td>{$C.cli_fone}</td>
              </tr>
              <tr>
                <td class="bg-info"><b>Rua</b></td>
                <td>{strtoupper($C.cli_endereco)}</td>
              </tr>
              <tr>
                <td class="bg-info"><b>Número</b></td>
                <td>{$C.cli_numero}</td>
              </tr>
              <tr>
                <td class="bg-info"><b>Ponto de referencia</b></td>
                <td>{strtoupper($C.cli_ponto_referencia)}</td>
              </tr>
              <tr>
                <td class="bg-info"><b>Bairro</b></td>
                <td>{strtoupper($C.cli_bairro)}</td>
              </tr>
              <tr>
                <td class="bg-info"><b>Cidade</b></td>
                <td>{strtoupper($C.cli_cidade)}</td>
              </tr>
              <tr>
                <td class="bg-info"><b>CEP</b></td>
                <td>{$C.cli_cep}</td>
              </tr>
             <tr>
                <td class="bg-info"><b>Cadastrado em</b></td>
                <td>{date('d/m/Y H:i',strtotime($C.cli_data_cad))}</td>
              </tr>
            {/foreach}
        </table>
    </center>
</section>