<?php

$smarty = new Template();
$carrinho = new Carrinho();
$produtos = new Produtos();
$smarty->assign('_GET_TEMA', Rotas::get_SiteTEMA());

$idProd = filter_input(INPUT_GET, 'button-add-cart');

echo $idProd;


$smarty->display('carrinho.tpl');