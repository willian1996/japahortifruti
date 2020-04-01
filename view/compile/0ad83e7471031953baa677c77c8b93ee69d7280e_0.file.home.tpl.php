<?php
/* Smarty version 3.1.33, created on 2019-08-16 04:13:19
  from 'C:\wamp64\www\Loja-Virtual-Gaby-Modas\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d56578f65bc85_54900530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ad83e7471031953baa677c77c8b93ee69d7280e' => 
    array (
      0 => 'C:\\wamp64\\www\\Loja-Virtual-Gaby-Modas\\view\\home.tpl',
      1 => 1564691744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d56578f65bc85_54900530 (Smarty_Internal_Template $_smarty_tpl) {
?>


  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo $_smarty_tpl->tpl_vars['IMG1']->value;?>
" alt="Los Angeles" class="img img-responsive"  style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo $_smarty_tpl->tpl_vars['IMG2']->value;?>
" alt="Chicago" class="img img-responsive" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo $_smarty_tpl->tpl_vars['IMG3']->value;?>
" alt="New york" class="img img-responsive" style="width:100%;">
      </div>

     <div class="item">
        <img src="<?php echo $_smarty_tpl->tpl_vars['IMG4']->value;?>
" alt="New york" class="img img-responsive" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<?php }
}
