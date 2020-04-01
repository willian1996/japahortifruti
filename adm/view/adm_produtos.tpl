<h2 class="text-center">Gerenciar Produtos</h2>
<hr>
<section class="row ">




    <div class="col-md-4 text-right">
        <a href="{$PAG_PRODUTO_NOVO}" class="btn btn-success"> <i class="glyphicon glyphicon-plus"></i> Novo Produto</a>

    </div>
<div class="col-md-4"> </div>



    <div class="col-md-4"> </div>



</section>
<br>

<!--     exibe mensagem caso nao encontre produtos -->
{if $PRO_TOTAL < 1}
<h4 class="alert alert-danger">Ops... Nada foi encontrado </h4>
{/if}


<!--  começa lista de produtos  ---->
<section id="produtos" class="row">
    <center><p>Clique no nome ou imagem para editar</p></center>
    <table class="table table-bordered">

        <tr class="bg-success text-success">
          <td></td>
          <td>Produto</td>
          <td>Categoria</td>
          <td>Preço</td>
        </tr>

        {foreach from=$PRO item=P}
        <tr>
            <td>
                <form name="proimg" method="post" action="{$PAG_PRODUTO_IMG}">
                    <input type="hidden" name="pro_id" id="pro_id" value="{$P.pro_id}">
                    <input type="hidden" name="pro_nome" id="pro_nome" value="{$P.pro_nome}">
                    <input type="image" src="{$P.pro_img_p}">
                </form>
            </td>
            <td>
                <form name="proeditar" method="post" action="{$PAG_PRODUTO_EDITAR}">
                    <input type="hidden" name="pro_id" id="pro_id" value="{$P.pro_id}">
                    <button style="border: 0; background-color: #FFF; text-decoration: underline;">{$P.pro_nome}</button>
                </form>
            </td>
            <td>{$P.cate_nome}</td>
            <td>R${$P.pro_valor}</td>
        </tr>
        {/foreach}

    </table>
</section>


 <!--  paginação inferior   -->
<section id="pagincao" class="row">
<center>
{$PAGINAS}
</center>
</section>
