{foreach from=$PRO item=P}  

      <h3 id="nomeproduto" class="text-center">{$P.pro_nome}</h3>
<hr>

<div class="row">


    {*  <!--div da esquerda imagem do produto  -->*}
    <div class="col-md-6 thumbnail">

        <img  src="{$P.pro_img_g}" alt="" width="100%" height="100%">

    </div>


	{*    <!--div da direita info produtos-->    *}
    <div class="col-md-6 thumbnail">

        <br>
          <img width="80%" src="{$TEMA}/imagens/banner_cartao.jpg" alt="">
          
        <hr>


        <div class="col-md-6">
            
           <h1 class="text-center preco">R$ {$P.pro_valor}</h1>

        </div>
        <div class="col-md-6">
            <form name="carrinho" method="post" action="{$PAG_COMPRAR}">
<!--
                <br>
                {$tamanhos = explode(",", $P.pro_tamanho)}
            
                <center><h4>Selecione o tamanho</h4></center>
                <select name="pro_tamanho" class="form-control selectpicker" required>
                    
                    <option value="">selecione</option>
                    {foreach from=$tamanhos $t}
                    <option value="{$t}">{$t}</option>
                    {/foreach}
                </select>
-->
                <br>

                <input type="hidden" name="pro_id" value="{$P.pro_id}">



                <input type="hidden" name="acao" value="add">
                <center><button  class="btn btn-success btn-lg">Colocar no Carrinho</button></center>
                <br><br>
             </form>

        </div>








    </div>




</div>
        <!-- -->
         {*  <!--listagem de imagens extras-->  *}
        <div class="row">
            <hr>
              <h4 class="text-center">Mais imagens</h4>

              <ul style="list-style: none">
                  {foreach from=$IMAGES item=I}


                      <li class="col-md-3 ">
                          <img src="{$I.img_nome}" alt="" class="thumbnail">


                      </li>

                  {/foreach}
              </ul>


        </div>
            {*    <!-- descrição do produto-->  *}

        <div class="row">
            <hr>
            <h4 class="text-center">Descrição do produto</h4>

            {$P.pro_desc}

        </div>
            <br>
            <br>


  {/foreach}
