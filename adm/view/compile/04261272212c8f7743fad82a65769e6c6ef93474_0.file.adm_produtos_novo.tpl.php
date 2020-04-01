<?php
/* Smarty version 3.1.33, created on 2020-03-31 19:39:58
  from 'C:\wamp64\www\japahortifruti\adm\view\adm_produtos_novo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e83c6be3b7570_41898916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04261272212c8f7743fad82a65769e6c6ef93474' => 
    array (
      0 => 'C:\\wamp64\\www\\japahortifruti\\adm\\view\\adm_produtos_novo.tpl',
      1 => 1585694390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e83c6be3b7570_41898916 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center"> Adicionar novo produto </h4>
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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

              <?php echo '<script'; ?>
 src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"><?php echo '</script'; ?>
>

              <?php echo '<script'; ?>
>
              tinymce.init({ selector:'textarea'  });
              <?php echo '</script'; ?>
>






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



<?php }
}
