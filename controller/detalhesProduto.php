<?php

$smarty = new Template();
$smarty->assign('_GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('_GET_IMAGE_URL', Rotas::get_ImageURL());

$produtos = new Produtos();
$produtos->getProdutoID(Rotas::$pag[1]);
$smarty->assign('prod_info', $produtos->GetItens());

$todosProdutos = new Produtos();
$todosProdutos->getProdutos();

$smarty->assign('allProd', $todosProdutos->GetItens());


$smarty->assign('detalhesProduto', "Detalhes do Produto");
$smarty->assign('fabricante', "Fabricante");
$smarty->assign('codigoProduto', "Modelo do Produto");
$smarty->assign('estoque', "Estoque");
$smarty->assign('produtoValor', "Preco: ");
$smarty->assign('descricao', "Descricao");
$smarty->assign('infoAdicionais', "Informacoes Adicionais");
$smarty->assign('addCarrinho', "Adicionar ao carrinho");
$smarty->assign('qtd', "Quantidade");
$smarty->assign('produtos', "Produtos");
$smarty->assign('relacionados', "Relacionado");




$smarty->display('detalhesProduto.tpl');
