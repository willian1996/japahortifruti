<?php

$smarty = new Template();


$smarty->assign('IMG1', Rotas::ImageLink('img1.jpg', 600, 350));
$smarty->assign('IMG2', Rotas::ImageLink('img2.jpg', 600, 350));
$smarty->assign('IMG3', Rotas::ImageLink('img3.jpg', 600, 350));
$smarty->assign('IMG4', Rotas::ImageLink('img4.jpg', 600, 350));
$smarty->display('home.tpl');
require_once Rotas::get_Pasta_Controller().'/produtos.php';
