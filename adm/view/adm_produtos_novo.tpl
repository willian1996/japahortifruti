<h4 class="text-center"> Adicionar novo produto </h4>
<hr>


<!-- começa os campos para form produto    -->
<section class="row" id="camposproduto">
                                           <!--  enctype="multipart/form-data"  -->
    <form name="frm_produto" method="post" action=""  enctype="multipart/form-data">

        <div class="col-md-6">
            <label>Nome do Produto</label>
            <input type="text" name="pro_nome" id="pro_nome" class="form-control"  required >

        </div>



        <div class="col-md-4">
            <label>Catogoria</label>

            <select name="pro_categoria" id="pro_categoria" class="form-control" required>

                <option value=""> Escolha </option>
                    {foreach from=$CATEGORIAS item=C}
                <option value="{$C.cate_id}">{$C.cate_nome}</option>
                    {/foreach}
            </select>


        </div>




        <div class="col-md-2">
            <label>Ativo</label>
            <select name="pro_ativo" id="pro_cativo" class="form-control" required>
                <option value="">Escolha </option>
                <option value="SIM" selected>Sim</option>
                <option value="NAO">Não</option>
            </select>


        </div>



           <div class="col-md-2">
            <label>Valor</label>
            <input type="text" name="pro_valor" id="pro_valor" class="form-control" required >

        </div>
        
    
        
       
        

        


        <div class="col-md-12">

            <div class="col-md-3">

            </div>

            <div class="col-md-6">

                 <hr>
                 <label>Imagem Principal</label>
                 <input type="file" name="pro_img" class="form-control " id="pro_img" required>
            </div>

            <div class="col-md-3">



            </div>



        </div>



           <div class="col-md-12">
            <label>Descrição</label>

            <textarea style="min-height:150px;" name="pro_desc" id="pro_desc" rows="5" class="form-control">
            <b>Pedido minimo 75,00 (PAGAMENTO NA ENTREGA)</b><br><br>

            
            <ul>
                <li>Entregamos em Caraguatatuba</li><br>
                <li>Entregamos em São Sebastião</li><br>
                <li>Entregamos em Ilhabela</li><br>
                <li>Entregamos em Ubatuba</li><br>
                
            </ul>
            <em>foto meramente ilustrativa</em><br><br>


            </textarea>

              <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>

              <script>
              tinymce.init({ selector:'textarea'  });
              </script>






          </div>

           <div class="col-md-12">
            <label>Slug</label>
            <input type="text" readonly name="pro_slug" id="pro_slug"   class="form-control" >

          </div>

        <!-- botão gravar -->



            <div class="col-md-4">

            </div>

            <div class="col-md-4">
                <br>
                <button class="btn btn-success btn-block btn-lg" name="btn_gravar">Cadastrar Produto</button>
            </div>

            <div class="col-md-4">

            </div>





    </form>




</section>

<br>
<br>
<br>
<br>



