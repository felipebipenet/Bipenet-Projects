<?php

$smarty = new Template();

$smarty->assign('_GET_TEMA', Rotas::get_SiteTEMA());

$smarty->assign('contato', "Contato");
$smarty->assign('nome', "Nome");
$smarty->assign('email', "Email");
$smarty->assign('endereco', "Endereco do email");
$smarty->assign('mensagem', "Mensagem");
$smarty->assign('enviarMensagem', "Enviar Mensagem");
$smarty->assign('msgContato', "Preencha os dados abaixo e nos envie, responderemos o mais breve possivel <strong>conte conosco.</strong>");
$smarty->assign('infoAdicionais', "Mais informacoes");
$smarty->assign('telefone', "Telefone:");
$smarty->assign('fax', "Mais Fax:");
$smarty->assign('email', "Email");


$smarty->display('contato.tpl');
?>

