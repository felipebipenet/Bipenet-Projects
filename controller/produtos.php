<?php

$smarty = new Template();
$produtos = new Produtos();

if (isset(Rotas::$pag[1])) {
    $produtos->getProdutosCateID(Rotas::$pag[1]);
} else {
    $produtos->getProdutos();
}

$smarty->assign('_GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('_GET_IMAGE_URL', Rotas::get_ImageURL());

$smarty->assign('pro', $produtos->GetItens());
$smarty->assign('pro_info', Rotas::pag_ProdutoInfo());
$smarty->assign('pro_total', $produtos->ContarDados());

$smarty->display('produtos.tpl');
