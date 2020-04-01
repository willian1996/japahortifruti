

<h4 class="text-center"> Editar produto </h4>
<hr>


<!-- começa os campos para form produto    -->
<section class="row" id="camposproduto">
                                           <!--  enctype="multipart/form-data"  -->
    <form name="frm_produto" method="post" action=""  enctype="multipart/form-data">

        <div class="col-md-6">
            <label>Produto</label>
            <input type="text" name="pro_nome" id="pro_nome" class="form-control"  required value="{$PRO.1.pro_nome}">

        </div>

 

        <div class="col-md-4">
            <label>Catogoria</label>

            <select name="pro_categoria" id="pro_categoria" class="form-control" required>

                <option value="{$PRO.1.cate_id}"> {$PRO.1.cate_nome} </option>
                <option value=""> Escolha</option>
                    {foreach from=$CATEGORIAS item=C}
                <option value="{$C.cate_id}">{$C.cate_nome}</option>
                    {/foreach}
            </select>


        </div>




        <div class="col-md-2">
            <label>Ativo</label>
            <select name="pro_ativo" id="pro_cativo" class="form-control" required >
                <option value=""> Escolha </option>
                <option value="SIM" {if {$PRO.1.pro_ativo} == 'SIM'}selected="selected"{/if}> Sim </option>
                <option value="NAO" {if {$PRO.1.pro_ativo} == 'NAO'}selected="selected"{/if}> Não </option>
            </select>
        </div>


        <div class="col-md-2">
            <label>Referencia</label>
            <input type="hidden" name="pro_ref" id="pro_ref" class="form-control" value="{$PRO.1.pro_ref}" >
            
        </div>



           <div class="col-md-2">
            <label>Valor</label>
            <input type="text" name="pro_valor" id="pro_valor" class="form-control" required value="{$PRO.1.pro_valor}">

        </div>
        
        

        <div class="col-md-12">

            <div class="col-md-4">
               <hr>
               <img src="{$PRO.1.pro_img}" class="thumbnail" alt="">

            </div>

            <div class="col-md-4">

                 <hr>
                 <label>Imagem Principal</label>
                 <!--- campos para adicionar a imagem---->
                 <input type="file" name="pro_img" class="form-control btn btn-default" id="pro_img">
                 <!--pega o nome da imagem atual -->
                 <input type="hidden" name="pro_img_atual" id="pro_img_atual" value="{$PRO.1.pro_img_atual}">
                 <!----pega o caminho completo da imagem atual -->
                 <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="{$PRO.1.pro_img_arquivo}">



            </div>

            <div class="col-md-4">



            </div>



        </div>



           <div class="col-md-12">
            <label>Descrição</label>

            <textarea style="min-height:150px;" name="pro_desc" id="pro_desc" rows="5" class="form-control" >{$PRO.1.pro_desc}</textarea>

              <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
              <script>
              tinymce.init({ selector:'textarea'  });
              </script>






          </div>

           <div class="col-md-12">
            <label>Slug</label>
            <input type="text" readonly name="pro_slug" id="pro_slug"   class="form-control" value="{$PRO.1.pro_slug}">

          </div>

        <!-- botão gravar -->



            <div class="col-md-4">

            </div>

            <div class="col-md-4">
                <br>
                <button class="btn btn-success btn-block btn-lg" name="btn_gravar"> Editar </button>
            </div>

            <div class="col-md-4 text-right">

            </div>


        <input type="hidden" name="pro_id" value="{$PRO.1.pro_id}">


    </form>




</section>



        <!---bloco de apagar o produto -->
        <section class="row">

            <div class="col-md-4">

            </div>

            <div class="col-md-4">


            </div>

            <div class="col-md-4 text-right">
                <!--- botão que abre a opção de apagar -->
                <br>
                <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="glyphicon glyphicon-remove"></i> Apagar Produto</button>

            </div>


            <div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">

                <br>


                <form name="frm_apagar" method="post" action="">
                    <label>Apagar este produto?</label>

                    <input type="checkbox" name="confirmar" value="SIM" required>
                    <!---botao que apagar o produto de uma vez -->
                    <button class="btn btn-danger " name="btn_apagar"><i class="glyphicon glyphicon-remove"></i> OK </button>




                    <input type="hidden" name="pro_id_apagar" value="{$PRO.1.pro_id}">
                    <input type="hidden" name="pro_apagar" value="SIM">

                       <!----pega o caminho completo da imagem atual -->
                 <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="{$PRO.1.pro_img_arquivo}">

                </form>

            </div>


        </section>


<br>
<br>
<br>
<br>
